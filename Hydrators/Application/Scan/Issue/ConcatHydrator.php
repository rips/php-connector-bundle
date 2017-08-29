<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\ConcatEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\FunctionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class ConcatHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * ConcatEntity objects
     *
     * @param  array<stdClass> $issue
     * @return array<ConcatEntity>
     */
    public static function hydrateCollection(array $concat)
    {
        $hydrated = [];

        foreach ($concats as $concat) {
            $hydrated[] = self::hydrate($concat);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a ConcatEntity object
     *
     * @param  stdClass $issue
     * @return ConcatEntity
     */
    public static function hydrate(\stdClass $concat)
    {
        $hydrated = new ConcatEntity();

        if (isset($concat->id)) {
            $hydrated->setId($concat->id);
        }

        if (isset($concat->comment)) {
            $hydrated->setComment($concat->comment);
        }

        if (isset($concat->file)) {
            $hydrated->setFile(FileHydrator::hydrate($concat->file));
        }

        if (isset($concat->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($concat->scan));
        }

        if (isset($concat->function)) {
            $hydrated->setFunction(FunctionHydrator::hydrate($concat->function));
        }
    }
}
