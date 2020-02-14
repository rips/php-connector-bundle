<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Hydrators\User\MfaHydrator;
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

        if (isset($user->valid_until)) {
            $hydrated->setValidUntil(new DateTime($user->valid_until));
        }

        if (isset($user->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($user->organization));
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

        if (isset($user->last_login)) {
            $hydrated->setLastLogin(new DateTime($user->last_login));
        }

        if (isset($user->created_at)) {
            $hydrated->setCreatedAt(new DateTime($user->created_at));
        }

        if (isset($user->confirmation_token)) {
            $hydrated->setConfirmationToken($user->confirmation_token);
        }

        if (isset($user->reset_token)) {
            $hydrated->setResetToken($user->reset_token);
        }

        if (isset($user->activation_token)) {
            $hydrated->setActivationToken($user->activation_token);
        }

        if (isset($user->mfa)) {
            $hydrated->setMfa(MfaHydrator::hydrate($user->mfa));
        }

        return $hydrated;
    }
}
