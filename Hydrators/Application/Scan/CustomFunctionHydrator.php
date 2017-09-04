<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\CustomFunctionEntity;

class CustomFunctionHydrator
{
    /**
     * Hydrate a collection of custom-function objects into a collection of
     * CustomFunctionEntity objects
     *
     * @param stdClass[] $function
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
     * @param  \stdClass $function
     * @return CustomFunctionEntity
     */
    public static function hydrate(\stdClass $function)
    {
        $hydrated = new CustomFunctionEntity();

        if (isset($function->id)) {
            $hydrated->setId($function->id);
        }

        if (isset($function->startLine)) {
            $hydrated->setStartLine($function->startLine);
        }

        if (isset($function->endLine)) {
            $hydrated->setEndLine($function->endLine);
        }

        if (isset($function->name)) {
            $hydrated->setName($function->name);
        }

        return $hydrated;
    }
}
