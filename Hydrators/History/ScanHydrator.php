<?php

namespace RIPS\ConnectorBundle\Hydrators\History;

use RIPS\ConnectorBundle\Entities\History\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\History\Scan\Issue\TypeHydrator;
use RIPS\ConnectorBundle\Hydrators\History\Scan\JavaHydrator;
use RIPS\ConnectorBundle\Hydrators\History\Scan\LibraryHydrator;
use RIPS\ConnectorBundle\Hydrators\History\Scan\PhpHydrator;

class ScanHydrator
{
    /**
     * Hydrate a collection of scans objects into a collection of
     * ScanEntity objects
     *
     * @param \stdClass[] $scans
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
     * Hydrate a history scan object into a ScanEntity object
     *
     * @param \stdClass $scan
     * @return ScanEntity
     */
    public static function hydrate(\stdClass $scan)
    {
        $hydrated = new ScanEntity();

        if (isset($scan->id)) {
            $hydrated->setId($scan->id);
        }

        if (isset($scan->scan_id)) {
            $hydrated->setScanId($scan->scan_id);
        }

        if (isset($scan->application_id)) {
            $hydrated->setApplicationId($scan->application_id);
        }

        if (isset($scan->organization_id)) {
            $hydrated->setOrganizationId($scan->organization_id);
        }

        if (isset($scan->organization_name)) {
            $hydrated->setOrganizationName($scan->organization_name);
        }

        if (isset($scan->started_at)) {
            $hydrated->setStartedAt(new \DateTime($scan->started_at));
        }

        if (isset($scan->finished_at)) {
            $hydrated->setFinishedAt(new \DateTime($scan->finished_at));
        }

        if (isset($scan->phase)) {
            $hydrated->setPhase($scan->phase);
        }

        if (isset($scan->loc)) {
            $hydrated->setLoc($scan->loc);
        }

        if (isset($scan->custom_profile)) {
            $hydrated->setCustomProfile($scan->custom_profile);
        }

        if (isset($scan->files)) {
            $hydrated->setFiles($scan->files);
        }

        if (isset($scan->known_functions)) {
            $hydrated->setKnownFunctions($scan->known_functions);
        }

        if (isset($scan->known_classes)) {
            $hydrated->setKnownClasses($scan->known_classes);
        }

        if (isset($scan->unresolved_functions)) {
            $hydrated->setUnresolvedFunctions($scan->unresolved_functions);
        }

        if (isset($scan->unresolved_classes)) {
            $hydrated->setUnresolvedClasses($scan->unresolved_classes);
        }

        if (isset($scan->process_time)) {
            $hydrated->setProcessTime($scan->process_time);
        }

        if (isset($scan->process_memory)) {
            $hydrated->setProcessMemory($scan->process_memory);
        }

        if (isset($scan->queue_time)) {
            $hydrated->setQueueTime($scan->queue_time);
        }

        if (isset($scan->libraries)) {
            $hydrated->setLibraries(LibraryHydrator::hydrateCollection($scan->libraries));
        }

        if (isset($scan->issue_types)) {
            $hydrated->setIssueTypes(TypeHydrator::hydrateCollection($scan->issue_types));
        }

        if (isset($scan->php)) {
            $hydrated->setPhp(PhpHydrator::hydrate($scan->php));
        }

        if (isset($scan->java)) {
            $hydrated->setJava(JavaHydrator::hydrate($scan->java));
        }

        return $hydrated;
    }
}
