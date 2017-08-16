<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 16.08.17
 * Time: 15:56
 */

namespace RIPS\ConnectorBundle\Hydrators;


use RIPS\ConnectorBundle\Entities\ApplicationEntity;

class ApplicationHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * UserEntity objects
     *
     * @param array<stdClass> $users
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
     * @param stdClass $application
     * @return ApplicationEntity
     */
    public static function hydrate(\stdClass $application)
    {
        $hydrated = new ApplicationEntity();

        $hydrated->setId($application->id);
        $hydrated->setApplicationName($application->applicationName);
        $hydrated->setCurrentScan($application->currentScan);
        $hydrated->setCreation($application->creation);
        $hydrated->setOrganisation($application->organisation);

        if (isset($app->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($application->organisation));  //not sure with that one here
        }

        return $hydrated;
    }
}