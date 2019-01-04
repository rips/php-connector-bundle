<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\TaintEntity;

class TaintHydrator
{
    /**
     * Hydrate a collection of taint objects into a collection of
     * TaintEntity objects
     *
     * @param stdClass[] $taints
     * @return TaintEntity[]
     */
    public static function hydrateCollection(array $taints)
    {
        $hydrated = [];

        foreach ($taints as $taint) {
            $hydrated[] = self::hydrate($taint);
        }

        return $hydrated;
    }

    /**
     * Hydrate a taint object into a TaintEntity object
     *
     * @param stdClass $taint
     * @return TaintEntity
     */
    public static function hydrate(stdClass $taint)
    {
        $hydrated = new TaintEntity();

        if (isset($taint->id)) {
            $hydrated->setId($taint->id);
        }

        if (isset($taint->start_line)) {
            $hydrated->setStartLine($taint->start_line);
        }

        if (isset($taint->end_line)) {
            $hydrated->setEndLine($taint->end_line);
        }

        if (isset($taint->start_column)) {
            $hydrated->setStartColumn($taint->start_column);
        }

        if (isset($taint->end_column)) {
            $hydrated->setEndColumn($taint->end_column);
        }

        return $hydrated;
    }
}
