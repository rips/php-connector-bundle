<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use RIPS\ConnectorBundle\Hydrators\Application\Scan\ProcessHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class ScanHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * ScanEntity objects
     *
     * @param  array<stdClass> $users
     * @return array<ScanEntity>
     */
    public static function hydrateCollection(array $scans)
    {
        $hydrated = [];

        foreach ($scans as $scan) {
            $hydrated[] = self::hydrate($scan);
        }

        return $hydrated;
    }

    /**
     * Hydrate a scan object into a ScanEntity object
     *
     * @param  \stdClass $scan
     * @return ScanEntity
     */
    public static function hydrate(\stdClass $scan)
    {
        $hydrated = new ScanEntity();

        if (isset($scan->id)){
            $hydrated->setId($scan->id);
        }

        if (isset($scan->version)){
            $hydrated->setVersion($scan->version);
        }

        if (isset($scan->path)){
            $hydrated->setPath($scan->path);
        }

        if (isset($scan->phase)){
            $hydrated->setPhase($scan->phase);
        }

        if (isset($scan->percent)){
            $hydrated->setPercent($scan->percent);
        }

        if (isset($scan->loc)){
            $hydrated->setLoc($scan->loc);
        }

        if (isset($scan->codeStored)){
            $hydrated->setCodeStored($scan->codeStored);
        }

        if (isset($scan->uploadRemoved)){
            $hydrated->setUploadRemoved($scan->uploadRemoved);
        }

        if (isset($scan->analysisDepth)){
            $hydrated->setAnalysisDepth($scan->analysisDepth);
        }

        if (isset($scan->php)){
            $hydrated->setPhp(PHPHydrator::hydrate($scan->php));
        }

        if (isset($scan->application)){
            $hydrated->setApplicationEntity(ApplicationHydrator::hydrate($scan->application));
        }

        if (isset($scan->createdBy)){
            $hydrated->setUserEntity(UserHydrator::hydrate($scan->createdBy));
        }

        if (isset($scan->id)){
            $hydrated->setProcess(ProcessHydrator::hydrate($scan->process));
        }

        return $hydrated;
    }
}
