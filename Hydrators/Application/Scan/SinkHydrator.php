<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Hydrators\Application\Scan\Sink\TypeHydrator;
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

        if (isset($sink->startLine)) {
            $hydrated->setStartLine($sink->startLine);
        }

        if (isset($sink->endLine)) {
            $hydrated->setEndLine($sink->endLine);
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

        if (isset($sink->startColumn)) {
            $hydrated->setStartColumn($sink->startColumn);
        }

        if (isset($sink->endColumn)) {
            $hydrated->setEndColumn($sink->endColumn);
        }

        if (isset($sink->type)) {
            $hydrated->setType(TypeHydrator::hydrate($sink->type));
        }

        return $hydrated;
    }
}
