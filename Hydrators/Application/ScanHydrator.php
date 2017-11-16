<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ConcatHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PhpHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SourceHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SinkHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator as IssueTypeHydrator;

class ScanHydrator
{
    /**
     * Hydrate a collection of scan objects into a collection of
     * ScanEntity objects
     *
     * @param stdClass[] $scans
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
     * @param stdClass $scan
     * @return ScanEntity
     */
    public static function hydrate(stdClass $scan)
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

        if (isset($scan->start)) {
            $hydrated->setStart(new DateTime($scan->start));
        }

        if (isset($scan->finish)) {
            $hydrated->setFinish(new DateTime($scan->finish));
        }

        if (isset($scan->last_modification)) {
            $hydrated->setLastModification(new DateTime($scan->last_modification));
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

        if (isset($scan->full_code_compared)) {
            $hydrated->setFullCodeCompared($scan->full_code_compared);
        }

        if (isset($scan->history_inherited)) {
            $hydrated->setHistoryInherited($scan->history_inherited);
        }

        if (isset($scan->php)) {
            $hydrated->setPhp(PhpHydrator::hydrate($scan->php));
        }

        if (isset($scan->sources) && is_array($scan->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($scan->sources));
        }

        if (isset($scan->sinks) && is_array($scan->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($scan->sinks));
        }

        if (isset($scan->concats) && is_array($scan->concats)) {
            $hydrated->setConcats(ConcatHydrator::hydrateCollection($scan->concats));
        }

        if (isset($scan->files) && is_array($scan->files)) {
            $hydrated->setFiles(FileHydrator::hydrateCollection($scan->files));
        }

        if (isset($scan->functions) && is_array($scan->functions)) {
            $hydrated->setFunctions(CustomFunctionHydrator::hydrateCollection($scan->functions));
        }

        if (isset($scan->classes) && is_array($scan->classes)) {
            $hydrated->setClasses(CustomClassHydrator::hydrateCollection($scan->classes));
        }

        if (isset($scan->issues) && is_array($scan->issues)) {
            $hydrated->setIssues(IssueHydrator::hydrateCollection($scan->issues));
        }

        if (isset($scan->upload)) {
            $hydrated->setUpload(UploadHydrator::hydrate($scan->upload));
        }

        if (isset($scan->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($scan->application));
        }

        if (isset($scan->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($scan->created_by));
        }

        if (isset($scan->charged_quota)) {
            $hydrated->setChargedQuota(QuotaHydrator::hydrate($scan->charged_quota));
        }

        if (isset($scan->custom)) {
            $hydrated->setCustom(CustomHydrator::hydrate($scan->custom));
        }

        if (isset($scan->issue_types) && is_array($scan->issue_types)) {
            $hydrated->setIssueTypes(IssueTypeHydrator::hydrateCollection($scan->issue_types));
        }

        if (isset($scan->parent)) {
            $hydrated->setParent(self::hydrate($scan->parent));
        }

        if (isset($scan->children) && is_array($scan->children)) {
            $hydrated->setChildren(self::hydrateCollection($scan->children));
        }

        if (isset($scan->severity_distributions)) {
            $hydrated->setSeverityDistributions((array)$scan->severity_distributions);
        }

        if (isset($scan->callbacks)) {
            $hydrated->setCallbacks($scan->callbacks);
        }

        return $hydrated;
    }
}
