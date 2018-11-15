<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;

class UserHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * UserEntity objects
     *
     * @param stdClass[] $users
     * @return UserEntity[]
     */
    public static function hydrateCollection(array $users)
    {
        $hydrated = [];

        foreach ($users as $user) {
            $hydrated[] = self::hydrate($user);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a UserEntity object
     *
     * @param stdClass $user
     * @return UserEntity
     */
    public static function hydrate(stdClass $user)
    {
        $hydrated = new UserEntity();

        if (isset($user->id)) {
            $hydrated->setId($user->id);
        }

        if (isset($user->email)) {
            $hydrated->setEmail($user->email);
        }

        if (isset($user->firstname)) {
            $hydrated->setFirstname($user->firstname);
        }

        if (isset($user->lastname)) {
            $hydrated->setLastname($user->lastname);
        }

        if (isset($user->plain_password)) {
            $hydrated->setPlainPassword($user->plain_password);
        }

        if (isset($user->valid_until)) {
            $hydrated->setValidUntil(new DateTime($user->valid_until));
        }

        if (isset($user->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($user->organization));
        }

        if (isset($user->teams) && is_array($user->teams)) {
            $hydrated->setTeams(TeamHydrator::hydrateCollection($user->teams));
        }

        if (isset($user->roles)) {
            $hydrated->setRoles($user->roles);
        }

        if (isset($user->root)) {
            $hydrated->setRoot($user->root);
        }

        if (isset($user->whitelisted_ips)) {
            $hydrated->setWhitelistedIps($user->whitelisted_ips);
        }

        return $hydrated;
    }
}
