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

        if (isset($taint->startLine)) {
            $hydrated->setStartLine($taint->startLine);
        }

        if (isset($taint->endLine)) {
            $hydrated->setEndLine($taint->endLine);
        }

        if (isset($taint->startColumn)) {
            $hydrated->setStartColumn($taint->startColumn);
        }

        if (isset($taint->endColumn)) {
            $hydrated->setEndColumn($taint->endColumn);
        }

        return $hydrated;
    }
}
