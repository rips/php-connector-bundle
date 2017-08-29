<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\ApplicationEntity;

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

        if (isset($application->id)){
            $hydrated->setId($application->id);
        }

        if (isset($application->applicationName)){
            $hydrated->setApplicationName($application->applicationName);
        }

        if (isset($application->currentScan)){
            $hydrated->setCurrentScan($application->currentScan);
        }

        if (isset($application->creation)){
            $hydrated->setCreation($application->creation);
        }

        if (isset($app->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($application->organisation));  //not sure with that one here
        }

        return $hydrated;
    }
}
