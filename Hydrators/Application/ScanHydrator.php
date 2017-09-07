<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ProcessHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PHPHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;

class ScanHydrator
{
    /**
     * Hydrate a collection of scan objects into a collection of
     * ScanEntity objects
     *
     * @param  \stdClass[] $scans
     * @return ScanEntity[]
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

        if (isset($scan->id)) {
            $hydrated->setId($scan->id);
        }

        if (isset($scan->version)) {
            $hydrated->setVersion($scan->version);
        }

        if (isset($scan->path)) {
            $hydrated->setPath($scan->path);
        }

        if (isset($scan->phase)) {
            $hydrated->setPhase($scan->phase);
        }

        if (isset($scan->percent)) {
            $hydrated->setPercent($scan->percent);
        }

        if (isset($scan->loc)) {
            $hydrated->setLoc($scan->loc);
        }

        if (isset($scan->code_stored)) {
            $hydrated->setCodeStored($scan->code_stored);
        }

        if (isset($scan->upload_removed)) {
            $hydrated->setUploadRemoved($scan->upload_removed);
        }

        if (isset($scan->analysis_depth)) {
            $hydrated->setAnalysisDepth($scan->analysis_depth);
        }

        if (isset($scan->php)) {
            $hydrated->setPhp(PHPHydrator::hydrate($scan->php));
        }

        if (isset($scan->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($scan->application));
        }

        if (isset($scan->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($scan->created_by));
        }

        if (isset($scan->process)) {
            $hydrated->setProcess(ProcessHydrator::hydrate($scan->process));
        }

        if (isset($scan->upload)) {
            $hydrated->setUpload(UploadHydrator::hydrate($scan->upload));
        }

        if (isset($scan->parent)) {
            $hydrated->setParent(self::hydrate($scan->parent));
        }

        if (isset($scan->issueTypes) && count($scan->issueTypes) > 0) {
            $hydrated->setIssueTypes(TypeHydrator::hydrateCollection($scan->issueTypes));
        }

        return $hydrated;
    }
}
