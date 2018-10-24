<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomFunctionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class CustomFunctionHydrator
{
    /**
     * Hydrate a collection of custom-function objects into a collection of
     * CustomFunctionEntity objects
     *
     * @param stdClass[] $customFunctions
     * @return CustomFunctionEntity[]
     */
    public static function hydrateCollection(array $customFunctions)
    {
        $hydrated = [];

        foreach ($customFunctions as $customFunction) {
            $hydrated[] = self::hydrate($customFunction);
        }

        return $hydrated;
    }

    /**
     * Hydrate a custom-function object into a CustomFunctionEntity object
     *
     * @param stdClass $customFunction
     * @return CustomFunctionEntity
     */
    public static function hydrate(stdClass $customFunction)
    {
        $hydrated = new CustomFunctionEntity();

        if (isset($customFunction->id)) {
            $hydrated->setId($customFunction->id);
        }

        if (isset($customFunction->start_line)) {
            $hydrated->setStartLine($customFunction->start_line);
        }

        if (isset($customFunction->end_line)) {
            $hydrated->setEndLine($customFunction->end_line);
        }

        if (isset($customFunction->name)) {
            $hydrated->setName($customFunction->name);
        }

        if (isset($customFunction->file)) {
            $hydrated->setFile(FileHydrator::hydrate($customFunction->file));
        }

        if (isset($customFunction->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($customFunction->class));
        }

        if (isset($customFunction->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($customFunction->scan));
        }

        if (isset($customFunction->sources) && is_array($customFunction->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($customFunction->sources));
        }

        if (isset($customFunction->sinks) && is_array($customFunction->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($customFunction->sinks));
        }

        if (isset($customFunction->concats)) {
            $hydrated->setConcats(ConcatHydrator::hydrateCollection($customFunction->concats));
        }

        if (isset($customFunction->parameters)) {
            $hydrated->setParameters($customFunction->parameters);
        }

        return $hydrated;
    }
}
