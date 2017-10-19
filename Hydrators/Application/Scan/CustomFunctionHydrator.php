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
     * @param stdClass[] $functions
     * @return CustomFunctionEntity[]
     */
    public static function hydrateCollection(array $functions)
    {
        $hydrated = [];

        foreach ($functions as $function) {
            $hydrated[] = self::hydrate($function);
        }

        return $hydrated;
    }

    /**
     * Hydrate a custom-function object into a CustomFunctionEntity object
     *
     * @param stdClass $function
     * @return CustomFunctionEntity
     */
    public static function hydrate(stdClass $function)
    {
        $hydrated = new CustomFunctionEntity();

        if (isset($function->id)) {
            $hydrated->setId($function->id);
        }

        if (isset($function->start_line)) {
            $hydrated->setStartLine($function->start_line);
        }

        if (isset($function->end_line)) {
            $hydrated->setEndLine($function->end_line);
        }

        if (isset($function->name)) {
            $hydrated->setName($function->name);
        }

        if (isset($function->file)) {
            $hydrated->setFile(FileHydrator::hydrate($function->file));
        }

        if (isset($function->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($function->class));
        }

        if (isset($function->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($function->scan));
        }

        if (isset($function->sources) && is_array($function->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($function->sources));
        }

        if (isset($function->sinks) && is_array($function->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($function->sinks));
        }

        if (isset($function->concats)) {
            $hydrated->setConcats(ConcatHydrator::hydrateCollection($function->concats));
        }

        return $hydrated;
    }
}
