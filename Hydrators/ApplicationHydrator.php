<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\AclHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\UploadHydrator;

class ApplicationHydrator
{
    /**
     * Hydrate a collection of application objects into a collection of
     * ApplicationEntity objects
     *
     * @param stdClass[] $applications
     * @return ApplicationEntity[]
     */
    public static function hydrateCollection(array $applications)
    {
        $hydrated = [];

        foreach ($applications as $application) {
            $hydrated[] = self::hydrate($application);
        }

        return $hydrated;
    }

    /**
     * Hydrate a application object into a ApplicationEntity object
     *
     * @param stdClass $application
     * @return ApplicationEntity
     */
    public static function hydrate(stdClass $application)
    {
        $hydrated = new ApplicationEntity();

        if (isset($application->id)) {
            $hydrated->setId($application->id);
        }

        if (isset($application->name)) {
            $hydrated->setName($application->name);
        }

        if (isset($application->scans) && is_array($application->scans)) {
            $hydrated->setScans(ScanHydrator::hydrateCollection($application->scans));
        }

        if (isset($application->current_scan)) {
            $hydrated->setCurrentScan($application->current_scan);
        }

        if (isset($application->customs) && is_array($application->customs)) {
            $hydrated->setCustoms(CustomHydrator::hydrateCollection($application->customs));
        }

        if (isset($application->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($application->created_by));
        }

        if (isset($application->charged_quota)) {
            $hydrated->setChargedQuota(QuotaHydrator::hydrate($application->charged_quota));
        }

        if (isset($application->uploads) && is_array($application->uploads)) {
            $hydrated->setUploads(UploadHydrator::hydrateCollection($application->uploads));
        }

        if (isset($application->acls) && is_array($application->acls)) {
            $hydrated->setAcls(AclHydrator::hydrateCollection($application->acls));
        }

        if (isset($application->creation)) {
            $hydrated->setCreation(new DateTime($application->creation));
        }

        if (isset($application->last_modification)) {
            $hydrated->setLastModification(new DateTime($application->last_modification));
        }

        if (isset($application->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($application->organisation));
        }

        if (isset($application->trial)) {
            $hydrated->setTrial($application->trial);
        }

        if (isset($application->default_scan_callbacks)) {
            $hydrated->setDefaultScanCallbacks($application->default_scan_callbacks);
        }

        return $hydrated;
    }
}
