<?php

declare(strict_types=1);

namespace cot\controllers\actions\ServerEvents;

use Cot;
use cot\controllers\BaseAction;
use cot\exceptions\NotFoundHttpException;
use cot\serverEvents\repositories\ServerEventsRepository;
use cot\serverEvents\ServerEventsDictionary;
use cot\serverEvents\ServerEventsObserverService;
use cot\serverEvents\ServerEventService;
use Db_cache_driver;
use Temporary_cache_driver;

/**
 * Server Sent Event index action
 * @package Cotonti
 * @copyright (c) Cotonti Team
 * @license https://github.com/Cotonti/Cotonti/blob/master/License.txt
 * @link https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events/Using_server-sent_events
 */
class ServerSentEventsAction extends BaseAction
{
    private const OLD_OBSERVERS_CHECK_KEY = 'SEOldObserversKey';
    private const CHECK_CONNECTION_KEY = 'SECheckConnectionKey';

    private $interval = 3;

    /**
     * @var ?ServerEventsObserverService
     */
    private $observerService;

    /**
     * @var ServerEventService
     */
    private $eventService;

    /**
     * @var ServerEventsRepository
     */
    private $eventsRepository;

    private $lastOldObserversClearedTime = 0;
    private $lastCheckConnectionTime = 0;
    private $sentEventsRegistryClearTime = 0;
    private $token = null;

    /**
     * @var array<int, string>
     */
    private $sentEvents = [];

    public function __construct()
    {
        $this->observerService = ServerEventsObserverService::getInstance();
        $this->eventService = ServerEventService::getInstance();
        $this->eventsRepository = ServerEventsRepository::getInstance();
    }

    public function run(): void
    {
        if (Cot::$usr['id'] === 0) {
            throw new NotFoundHttpException();
        }

        $this->clearOldObservers();

        $this->token = $this->observerService->register(Cot::$usr['id']);
        //$registeredAt = time();

        // Make session read-only
        session_write_close();

        // Disable the time limit
        set_time_limit(0);
        // This sets the maximum time in seconds a script is allowed to run before it is terminated by the parser.
        // 0 - unlimited
        ini_set('max_execution_time', '0');
        // This sets the maximum time in seconds a script is allowed to parse input data, like POST and GET.
        // -1 means that max_execution_time is used instead.
        //  0 allow unlimited time
        ini_set('max_input_time', '-1');

        // Disable output buffering
        for ($i = 0; $i <= ob_get_level(); $i++) {
            ob_end_clean();
        }
        ob_end_clean();
        ob_implicit_flush();

        ini_set('output_buffering', 'Off');

        // Set headers for stream
        header('X-Accel-Buffering: no');
        header('Content-Type: text/event-stream');
        header('Cache-Control: no-cache');
        header('Connection: keep-alive');
        header('Transfer-Encoding: chunked');
        flush();

//        $event = new \cot\serverEvents\ServerEventMessageDto();
//        $event->id = 0;
//        $event->event = 'connection';
//        $event->userId = 0;
//        $event->comment = 'connected';
//        $event->data = json_encode(['connection' => 'connected']);
//        echo $event;
//        if (ob_get_level() > 0) {
//            ob_flush();
//        }
//        flush();

        while (true) {
            $currentTime = time();
            if (connection_aborted()) {
                $this->observerService->remove(Cot::$usr['id'], $this->token);
                break;
            }

            if (
                $currentTime - $this->getGetLastOldObserversClearedTime()
                > ServerEventsDictionary::CLEAR_OLD_OBSERVERS_PERIOD
            ) {
                $this->clearOldObservers();
            }

            if (
                $currentTime - $this->getGetLastCheckConnectionTime() > ServerEventsDictionary::CHECK_CONNECTION_PERIOD
                && !$this->isStillConnected()
            ) {
                break;
            }

            if ($currentTime - $this->getLastClearSentEventsRegistryTime() > ServerEventsDictionary::EVENT_EXPIRE_IN) {
                $this->clearSentEventsRegistry();
            }

            $events = $this->eventsRepository->getForObserver(Cot::$usr['id'], $this->token);
            if ($events !== []) {
                $lastId = 0;
                foreach ($events as $event) {
                    if (isset($this->sentEvents[$event->id])) {
                        // Event already sent
                        continue;
                    }

                    echo $event;
                    if (ob_get_level() > 0) {
                        ob_flush();
                    }
                    flush();

                    $this->sentEvents[$event->id] = $currentTime;
                    if ($event->id > $lastId) {
                        $lastId = $event->id;
                    }
                }
                $this->observerService->setLastEventId($this->token, $lastId);
                $this->eventService->deleteByUserId(Cot::$usr['id']);
            }

            sleep($this->interval);
        }
    }

    /**
     * @return Temporary_cache_driver|Db_cache_driver|null
     */
    private function getCache()
    {
        if (!empty(Cot::$cache)) {
            return Cot::$cache->mem ?: Cot::$cache->db;
        }
        return null;
    }

    private function getGetLastOldObserversClearedTime(): int
    {
        if ($this->lastOldObserversClearedTime === 0) {
            $this->lastOldObserversClearedTime = time();
        }

        $cache = $this->getCache();
        if (!empty($cache)) {
            $result = $cache->get(self::OLD_OBSERVERS_CHECK_KEY);
            if (!$result) {
                $result = time();
            }
            $this->lastOldObserversClearedTime = $result;
        }

        return $this->lastOldObserversClearedTime;
    }

    private function getGetLastCheckConnectionTime(): int
    {
        if ($this->lastCheckConnectionTime === 0) {
            $this->lastCheckConnectionTime = time();
        }

        $cache = $this->getCache();
        if (!empty($cache)) {
            $result = $cache->get(self::CHECK_CONNECTION_KEY);
            if (!$result) {
                $result = time();
            }
            $this->lastCheckConnectionTime = $result;
        }

        return $this->lastCheckConnectionTime;
    }

    private function getLastClearSentEventsRegistryTime(): int
    {
        if ($this->sentEventsRegistryClearTime === 0) {
            $this->sentEventsRegistryClearTime = time();
        }
        return $this->sentEventsRegistryClearTime;
    }

    private function clearOldObservers(): void
    {
        $this->observerService->clearOld();

        $this->lastCheckConnectionTime = time();
        $cache = $this->getCache();
        if (!empty($cache)) {
            if (method_exists($cache, 'store_now')) {
                $cache->store_now(self::OLD_OBSERVERS_CHECK_KEY, $this->lastCheckConnectionTime);
            } else {
                $cache->store(self::OLD_OBSERVERS_CHECK_KEY, $this->lastCheckConnectionTime);
            }
        }
    }

    private function isStillConnected(): bool
    {
        $this->lastOldObserversClearedTime = time();
        $cache = $this->getCache();
        if (!empty($cache)) {
            if (method_exists($cache, 'store_now')) {
                $cache->store_now(self::OLD_OBSERVERS_CHECK_KEY, $this->lastOldObserversClearedTime);
            } else {
                $cache->store(self::OLD_OBSERVERS_CHECK_KEY, $this->lastOldObserversClearedTime);
            }
        }

        return $this->observerService->isConnected(Cot::$usr['id'], $this->token);
    }

    private function clearSentEventsRegistry(): void
    {
        $expireTime = time() - ServerEventsDictionary::EVENT_EXPIRE_IN + 30;
        foreach ($this->sentEvents as $eventId => $eventSentTime) {
            if ($eventSentTime <= $expireTime) {
                unset($this->sentEvents[$eventId]);
            }
        }
    }
}