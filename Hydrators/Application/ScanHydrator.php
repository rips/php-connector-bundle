<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
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
        $hydrated->getCodeStored($scan->codeStored);
        $hydrated->getUploadRemoved($scan->uploadRemoved);
        $hydrated->setAnalysisDepth($scan->analysisDepth);

        if (isset($scan->php)) {
            $hydrated->setPhp(PHPHydrator::hydrate($scan->php));
        }

        if (isset($scan->application)) {
            $hydrated->setPhp(ApplicationHydrator::hydrate($scan->application));
        }

        if (isset($scan->createdBy)) {
            $hydrated->setPhp(UserHydrator::hydrate($scan->createdBy));
        }

        if (isset($scan->process)) {
            $hydrated->setPhp(ProcessHydrator::hydrate($scan->application));
        }

        return $hydrated;
    }
}
