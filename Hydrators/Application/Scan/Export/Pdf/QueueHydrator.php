<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Export\Pdf;

use stdClass;

use RIPS\ConnectorBundle\Entities\Application\Scan\QueueEntity;

class QueueHydrator
{
    /**
     * Hydrate a collection of queue objects into a collection of
     * QueueEntity objects
     *
     * @param stdClass[] $queues
     * @return QueueEntity[]
     */
    public static function hydrateCollection(array $queues)
    {
        $hydrated = [];

        foreach ($queues as $queue) {
            $hydrated[] = self::hydrate($queue);
        }

        return $hydrated;
    }

    /**
     * Hydrate a java object into a QueueEntity object
     *
     * @param \stdClass $queue
     * @return QueueEntity
     */
    public static function hydrate(stdClass $queue)
    {
        $hydrated = new QueueEntity();

        if (isset($queue->id)) {
            $hydrated->setId($queue->id);
        }

        if (isset($queue->started_at)) {
            $hydrated->setStartedAt(new DateTime($queue->started_at));
        }

        if (isset($queue->finished_at)) {
            $hydrated->setFinishedAt(new DateTime($queue->finished_at));
        }

        return $hydrated;
    }
}
