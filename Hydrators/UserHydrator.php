<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\UserEntity;

class UserHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * UserEntity objects
     *
     * @param  array<stdClass> $users
     * @return array<UserEntity>
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
     * @param  stdClass $user
     * @return UserEntity
     */
    public static function hydrate(\stdClass $user)
    {
        $hydrated = new UserEntity();

        if (isset($user->id)) {
            $hydrated->setId($user->id);
        }

        if (isset($user->username)) {
            $hydrated->setUsername($user->username);
        }

        if (isset($user->firstname)) {
            $hydrated->setFirstname($user->firstname);
        }

        if (isset($user->lastname)) {
            $hydrated->setLastname($user->lastname);
        }

        if (isset($user->email)) {
            $hydrated->setEmail($user->email);
        }

        if (isset($user->enabled)) {
            $hydrated->setEnabled($user->enabled);
        }

        if (isset($user->empty_username)) {
            $hydrated->setEmptyUsername($user->empty_username);
        }

        if (isset($user->root)) {
            $hydrated->setRoot($user->root);
        }

        if (isset($user->roles)) {
            $hydrated->setRoles($user->roles);
        }

        if (isset($user->organisation)) {
            $hydrated->setOrganisation(OrgHydrator::hydrate($user->organisation));
        }

        if (isset($user->valid_until)) {
            $hydrated->setValidUntil($user->valid_until);
        }

        return $hydrated;
    }
}
