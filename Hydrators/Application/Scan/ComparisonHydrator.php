<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\ComparisonEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class ComparisonHydrator
{
    /**
     * Hydrate a collection of concat objects into a collection of
     * ComparisonEntity objects
     *
     * @param stdClass[] $comparisons
     * @return ComparisonEntity[]
     */
    public static function hydrateCollection(array $comparisons)
    {
        $hydrated = [];

        foreach ($comparisons as $comparison) {
            $hydrated[] = self::hydrate($comparison);
        }

        return $hydrated;
    }

    /**
     * Hydrate a comparison object into a ComparisonEntity object
     *
     * @param stdClass $comparison
     * @return ComparisonEntity
     */
    public static function hydrate(stdClass $comparison)
    {
        $hydrated = new ComparisonEntity();

        if (isset($comparison->id)) {
            $hydrated->setId($comparison->id);
        }

        if (isset($comparison->allowedMisses)) {
            $hydrated->setAllowedMisses($comparison->allowedMisses);
        }

        if (isset($comparison->filesThreshold)) {
            $hydrated->setFilesThreshold($comparison->filesThreshold);
        }

        if (isset($comparison->scannedOldFiles)) {
            $hydrated->setScannedOldFiles($comparison->scannedOldFiles);
        }

        if (isset($comparison->scannedNewFiles)) {
            $hydrated->setScannedNewFiles($comparison->scannedNewFiles);
        }

        if (isset($comparison->skippedOldFiles)) {
            $hydrated->setSkippedOldFiles($comparison->skippedOldFiles);
        }

        if (isset($comparison->skippedNewFiles)) {
            $hydrated->setSkippedNewFiles($comparison->skippedNewFiles);
        }

        if (isset($comparison->misses)) {
            $hydrated->setMisses($comparison->misses);
        }

        if (isset($comparison->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($comparison->scan));
        }

        return $hydrated;
    }
}
