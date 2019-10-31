<?php

namespace RIPS\ConnectorBundle\Hydrators\User;

use RIPS\ConnectorBundle\Entities\User\MfaEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use stdClass;
use DateTime;

class MfaHydrator
{
    /**
     * Hydrate a collection of mfa objects into a collection of
     * MfaEntity objects
     *
     * @param stdClass[] $mfas
     * @return MfaEntity[]
     */
    public static function hydrateCollection(array $mfas)
    {
        $hydrated = [];

        foreach ($mfas as $mfa) {
            $hydrated[] = self::hydrate($mfa);
        }

        return $hydrated;
    }

    /**
     * Hydrate a mfa object into a MfaEntity object
     *
     * @param stdClass $mfa
     * @return MfaEntity
     */
    public static function hydrate(stdClass $mfa)
    {
        $hydrated = new MfaEntity();

        if (isset($mfa->id)) {
            $hydrated->setId($mfa->id);
        }

        if (isset($mfa->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($mfa->created_by));
        }

        if (isset($mfa->created_at)) {
            $hydrated->setCreatedAt(new DateTime($mfa->created_at));
        }

        if (isset($mfa->token)) {
            $hydrated->setToken($mfa->token);
        }

        if (isset($mfa->secret)) {
            $hydrated->setSecret($mfa->secret);
        }

        if (isset($mfa->label)) {
            $hydrated->setLabel($mfa->label);
        }

        if (isset($mfa->issuer)) {
            $hydrated->setIssuer($mfa->issuer);
        }

        if (isset($mfa->enabled)) {
            $hydrated->setEnabled($mfa->enabled);
        }

        return $hydrated;
    }
}
