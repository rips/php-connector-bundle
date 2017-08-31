<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink\FunctionEntity;

class FunctionHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * FunctionEntity objects
     *
     * @param  array<\stdClass> $function
     * @return array<FunctionEntity>
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
     * Hydrate a user object into a FunctionEntity object
     *
     * @param  \stdClass $function
     * @return FunctionEntity
     */
    public static function hydrate(\stdClass $function)
    {
        $hydrated = new FunctionEntity();

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
    }
}
