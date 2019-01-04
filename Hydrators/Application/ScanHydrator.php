<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PhpHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\LibraryHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator as IssueTypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ProcessHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ComparisonHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\JavaHydrator;
use RIPS\ConnectorBundle\Hydrators\LanguageHydrator;

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

        if (isset($scan->started_at)) {
            $hydrated->setStartedAt(new DateTime($scan->started_at));
        }

        if (isset($scan->finished_at)) {
            $hydrated->setFinishedAt(new DateTime($scan->finished_at));
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

        if (isset($scan->source_type)) {
            $hydrated->setSourceType($scan->source_type);
        }

        if (isset($scan->php)) {
            $hydrated->setPhp(PhpHydrator::hydrate($scan->php));
        }

        if (isset($scan->java)) {
            $hydrated->setJava(JavaHydrator::hydrate($scan->java));
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

        if (isset($scan->profile)) {
            $hydrated->setProfile(ProfileHydrator::hydrate($scan->profile));
        }

        if (isset($scan->issue_types) && is_array($scan->issue_types)) {
            $hydrated->setIssueTypes(IssueTypeHydrator::hydrateCollection($scan->issue_types));
        }

        if (isset($scan->parent)) {
            $hydrated->setParent(self::hydrate($scan->parent));
        }

        if (isset($scan->severity_distributions)) {
            $hydrated->setSeverityDistributions((array)$scan->severity_distributions);
        }

        if (isset($scan->analysis_depth)) {
            $hydrated->setAnalysisDepth($scan->analysis_depth);
        }

        if (isset($scan->tags)) {
            $hydrated->setTags($scan->tags);
        }

        if (isset($scan->max_issues_per_type)) {
            $hydrated->setMaxIssuesPerType($scan->max_issues_per_type);
        }

        if (isset($scan->comment)) {
            $hydrated->setComment($scan->comment);
        }

        if (isset($scan->source)) {
            $hydrated->setSource($scan->source);
        }

        if (isset($scan->libraries) && is_array($scan->libraries)) {
            $hydrated->setLibraries(LibraryHydrator::hydrateCollection($scan->libraries));
        }

        if (isset($scan->processes) && is_array($scan->processes)) {
            $hydrated->setProcesses(ProcessHydrator::hydrateCollection($scan->processes));
        }

        if (isset($scan->languages) && is_array($scan->languages)) {
            $hydrated->setLanguages(LanguageHydrator::hydrateCollection($scan->languages));
        }

        if (isset($scan->comparison)) {
            $hydrated->setComparison(ComparisonHydrator::hydrate($scan->comparison));
        }
        return $hydrated;
    }
}
