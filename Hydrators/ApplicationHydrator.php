<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

class ApplicationHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * UserEntity objects
     *
     * @param  array<stdClass> $users
     * @return array<UserEntity>
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
     * Hydrate a user object into a UserEntity object
     *
     * @param  stdClass $application
     * @return ApplicationEntity
     */
    public static function hydrate(\stdClass $application)
    {
        $hydrated = new ApplicationEntity();

        if (isset($application->id)) {
            $hydrated->setId($application->id);
        }

        if (isset($application->name)) {
            $hydrated->setApplicationName($application->name);
        }

        if (isset($application->current_scan)) {
            $hydrated->setCurrentScan($application->current_scan);
        }

        if (isset($application->creation)) {
            $hydrated->setCreation($application->creation);
        }

        if (isset($application->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($application->organisation));  //not sure with that one here
        }

        if (isset($application->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($application->created_by));
        }

        if (isset($application->charged_quota)) {
            $hydrated->setChargedQuota(QuotaHydrator::hydrate($application->charged_quota));
        }

        return $hydrated;
    }
}
