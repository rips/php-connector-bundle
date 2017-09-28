<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomClassEntity;


class CustomClassHydrator
{
    /**
     * Hydrate a collection of customClass objects into a collection of
     * CustomClassEntity objects
     *
     * @param  \stdClass[] $customClasss
     * @return CustomClassEntity[]
     */
    public static function hydrateCollection(array $customClasss)
    {
        $hydrated = [];

        foreach ($customClasss as $customClass) {
            $hydrated[] = self::hydrate($customClass);
        }

        return $hydrated;
    }

    /**
     * Hydrate a customClass object into a CustomClassEntity object
     *
     * @param  \stdClass $customClass
     * @return CustomClassEntity
     */
    public static function hydrate(\stdClass $customClass)
    {
        $hydrated = new CustomClassEntity;

        if (isset($customClass->id)) {
            $hydrated->setId($customClass->id);
        }

        if (isset($customClass->start_line)) {
            $hydrated->setStartLine($customClass->start_line);
        }

        if (isset($customClass->end_line)) {
            $hydrated->setEndLine($customClass->end_line);
        }

        if (isset($customClass->name)) {
            $hydrated->setName($customClass->name);
        }

        if (isset($customClass->file)) {
            $hydrated->setFile(FileHydrator::hydrate($customClass->file));
        }
    
        if (isset($customClass->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($customClass->scan));
        }

        if (isset($customClass->functions)) {
            $hydrated->setFunctions(CustomFunctionHydrator::hydrateCollection($customClass->functions));
        }

        if (isset($customClass->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($customClass->sources));
        }

        if (isset($customClass->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($customClsas->sinks));
        }

        if (isset($customClass->concats)) {
            $hydrated->setConcats(ConcatHydrator::hydrateCollection($customClass->concats));
        }

        return $hydrated;
    }
}
