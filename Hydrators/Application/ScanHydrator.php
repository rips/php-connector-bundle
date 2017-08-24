<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\Application\UserEntity;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class ScanHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * UserEntity objects
     *
     * @param  array<stdClass> $users
     * @return array<UserEntity>
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
     * Hydrate a user object into a UserEntity object
     *
     * @param  stdClass $scan
     * @return ScanEntity
     */
    public static function hydrate(\stdClass $scan)
    {
        $hydrated = new ScanEntity();

        $hydrated->setId($scan->id);
        $hydrated->setVersion($scan->version);
        $hydrated->setPath($scan->path);
        $hydrated->setPhase($scan->phase);
        $hydrated->setPercent($scan->percent);
        $hydrated->setLoc($scan->loc);
        $hydrated->setCodeStored($scan->codeStored);
        $hydrated->setUploadRemoved($scan->uploadRemoved);
        $hydrated->setAnalysisDepth($scan->analysisDepth);
        $hydrated->setPhp(PHPHydrator::hydrate($scan->php));
        $hydrated->setApplicationEntity(ApplicationHydrator::hydrate($scan->application));
        $hydrated->setUserEntity(UserHydrator::hydrate($scan->createdBy));
        $hydrated->setProcess(ProcessHydrator::hydrate($scan->process));


        return $hydrated;
    }
}
