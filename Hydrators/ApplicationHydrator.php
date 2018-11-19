<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
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

        if (isset($application->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($application->created_by));
        }

        if (isset($application->charged_quota)) {
            $hydrated->setChargedQuota(QuotaHydrator::hydrate($application->charged_quota));
        }

        if (isset($application->created_at)) {
            $hydrated->setCreatedAt(new DateTime($application->created_at));
        }

        if (isset($application->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($application->organization));
        }

        if (isset($application->trial)) {
            $hydrated->setTrial($application->trial);
        }

        return $hydrated;
    }
}
