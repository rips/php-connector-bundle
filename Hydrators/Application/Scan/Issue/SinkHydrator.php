<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\FunctionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SinkEntity;

class SinkHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * SinkEntity objects
     *
     * @param  array<\stdClass> $sink
     * @return array<SinkEntity>
     */
    public static function hydrateCollection(array $sinks)
    {
        $hydrated = [];

        foreach ($sinks as $sink) {
            $hydrated[] = self::hydrate($sink);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a SinkEntity object
     *
     * @param  \stdClass $sink
     * @return SinkEntity
     */
    public static function hydrate(\stdClass $sink)
    {
        $hydrated = new SinkEntity();

        if (isset($sink->id)) {
            $hydrated->setId($sink->id);
        }

        if (isset($sink->line)) {
            $hydrated->setLine($sink->line);
        }

        if (isset($sink->path)) {
            $hydrated->setPath($sink->path);
        }

        if (isset($sink->phase)) {
            $hydrated->setPhase($sink->phase);
        }

        if (isset($sink->file)) {
            $hydrated->setFile(FileHydrator::hydrate($sink->file));
        }

        if (isset($sink->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($sink->scan));
        }

        if (isset($sink->function)) {
            $hydrated->setFunction(FunctionHydrator::hydrate($sink->function));
        }
    }
}
