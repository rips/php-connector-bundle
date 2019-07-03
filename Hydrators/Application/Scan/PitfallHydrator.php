<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\PitfallEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Pitfall\TypeHydrator;

class PitfallHydrator
{
    /**
     * Hydrate a collection of pitfall objects into a collection of
     * PitfallEntity objects
     *
     * @param stdClass[] $pitfalls
     * @return PitfallEntity[]
     */
    public static function hydrateCollection(array $pitfalls)
    {
        $hydrated = [];

        foreach ($pitfalls as $pitfall) {
            $hydrated[] = self::hydrate($pitfall);
        }

        return $hydrated;
    }

    /**
     * Hydrate a pitfall object into a PitfallEntity object
     *
     * @param stdClass $pitfall
     * @return PitfallEntity
     */
    public static function hydrate(stdClass $pitfall)
    {
        $hydrated = new PitfallEntity();

        if (isset($pitfall->id)) {
            $hydrated->setId($pitfall->id);
        }

        if (isset($pitfall->line)) {
            $hydrated->setLine($pitfall->line);
        }

        if (isset($pitfall->start_line)) {
            $hydrated->setStartLine($pitfall->start_line);
        }

        if (isset($pitfall->end_line)) {
            $hydrated->setEndLine($pitfall->end_line);
        }

        if (isset($pitfall->file)) {
            $hydrated->setFile(FileHydrator::hydrate($pitfall->file));
        }

        if (isset($pitfall->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($pitfall->function));
        }

        if (isset($pitfall->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($pitfall->class));
        }

        if (isset($pitfall->start_column)) {
            $hydrated->setStartColumn($pitfall->start_column);
        }

        if (isset($pitfall->end_column)) {
            $hydrated->setEndColumn($pitfall->end_column);
        }

        if (isset($pitfall->type)) {
            $hydrated->setType(TypeHydrator::hydrate($pitfall->type));
        }

        return $hydrated;
    }
}
