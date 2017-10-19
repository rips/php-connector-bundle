<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\SinkEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class SinkHydrator
{
    /**
     * Hydrate a collection of sink objects into a collection of
     * SinkEntity objects
     *
     * @param stdClass[] $sinks
     * @return SinkEntity[]
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
     * Hydrate a sink object into a SinkEntity object
     *
     * @param stdClass $sink
     * @return SinkEntity
     */
    public static function hydrate(stdClass $sink)
    {
        $hydrated = new SinkEntity();

        if (isset($sink->id)) {
            $hydrated->setId($sink->id);
        }

        if (isset($sink->line)) {
            $hydrated->setLine($sink->line);
        }

        if (isset($sink->name)) {
            $hydrated->setName($sink->name);
        }

        if (isset($sink->file)) {
            $hydrated->setFile(FileHydrator::hydrate($sink->file));
        }

        if (isset($sink->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($sink->scan));
        }

        if (isset($sink->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($sink->function));
        }

        if (isset($sink->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($sink->class));
        }

        if (isset($sink->issues)) {
            $hydrated->setIssues(IssueHydrator::hydrateCollection($sink->issues));
        }

        return $hydrated;
    }
}
