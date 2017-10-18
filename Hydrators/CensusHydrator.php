<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use RIPS\ConnectorBundle\Entities\CensusEntity;

class CensusHydrator
{
    /**
     * Hydrate a collection of census objects into a collection
     * of CensusEntity objects
     *
     * @param array $census
     * @return CensusEntity[]
     */
    public static function hydrateCollection(array $censuses)
    {
        $hydrated = [];

        foreach ($censuses as $census) {
            $hydrated[] = self::hydrate($census);
        }

        return $hydrated;
    }

    /**
     * Hydrate a census object into a CensusEntity object
     *
     * @param \stdClass $census
     * @return CensusEntity
     */
    public static function hydrate(stdClass $census)
    {
        $hydrated = new CensusEntity();

        if (isset($census->id)) {
            $hydrated->setId($census->id);
        }

        if (isset($census->scans)) {
            $hydrated->setScans($census->scans);
        }

        if (isset($census->issues)) {
            $hydrated->setIssues($census->issues);
        }

        if (isset($census->loc)) {
            $hydrated->setLoc($census->loc);
        }

        return $hydrated;
    }
}
