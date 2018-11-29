<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomClassEntity;

class CustomClassHydrator
{
    /**
     * Hydrate a collection of customClass objects into a collection of
     * CustomClassEntity objects
     *
     * @param stdClass[] $customClasses
     * @return CustomClassEntity[]
     */
    public static function hydrateCollection(array $customClasses)
    {
        $hydrated = [];

        foreach ($customClasses as $customClass) {
            $hydrated[] = self::hydrate($customClass);
        }

        return $hydrated;
    }

    /**
     * Hydrate a customClass object into a CustomClassEntity object
     *
     * @param stdClass $customClass
     * @return CustomClassEntity
     */
    public static function hydrate(stdClass $customClass)
    {
        $hydrated = new CustomClassEntity();

        if (isset($customClass->id)) {
            $hydrated->setId($customClass->id);
        }

        if (isset($customClass->start_line)) {
            $hydrated->setStartLine($customClass->start_line);
        }

        if (isset($customClass->end_line)) {
            $hydrated->setEndLine($customClass->end_line);
        }

        if (isset($customClass->start_column)) {
            $hydrated->setStartColumn($customClass->start_column);
        }

        if (isset($customClass->end_column)) {
            $hydrated->setEndColumn($customClass->end_column);
        }

        if (isset($customClass->name)) {
            $hydrated->setName($customClass->name);
        }

        if (isset($customClass->file)) {
            $hydrated->setFile(FileHydrator::hydrate($customClass->file));
        }
    
        if (isset($customClass->package)) {
            $hydrated->setPackage($customClass->package);
        }

        return $hydrated;
    }
}
