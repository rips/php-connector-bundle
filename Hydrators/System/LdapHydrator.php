<?php

namespace RIPS\ConnectorBundle\Hydrators\System;

use RIPS\ConnectorBundle\Entities\System\LdapEntity;
use stdClass;
use DateTime;

class LdapHydrator
{
    /**
     * Hydrate a collection of ldap objects into a collection of
     * LdapEntity objects
     *
     * @param stdClass[] $ldaps
     * @return LdapEntity[]
     */
    public static function hydrateCollection(array $ldaps)
    {
        $hydrated = [];

        foreach ($ldaps as $ldap) {
            $hydrated[] = self::hydrate($ldap);
        }

        return $hydrated;
    }

    /**
     * Hydrate a ldap object into a LdapEntity object
     *
     * @param stdClass $ldap
     * @return LdapEntity
     */
    public static function hydrate(stdClass $ldap)
    {
        $hydrated = new LdapEntity();

        if (isset($ldap->id)) {
            $hydrated->setId($ldap->id);
        }

        if (isset($ldap->enabled)) {
            $hydrated->setEnabled($ldap->enabled);
        }

        if (isset($ldap->search_dn)) {
            $hydrated->setSearchDn($ldap->search_dn);
        }

        if (isset($ldap->search_password)) {
            $hydrated->setSearchPassword($ldap->search_password);
        }

        if (isset($ldap->search_query)) {
            $hydrated->setSearchQuery($ldap->search_query);
        }

        if (isset($ldap->base_dn)) {
            $hydrated->setBaseDn($ldap->base_dn);
        }

        if (isset($ldap->email_key)) {
            $hydrated->setEmailKey($ldap->email_key);
        }

        if (isset($ldap->identifier_key)) {
            $hydrated->setIdentifierKey($ldap->identifier_key);
        }

        if (isset($ldap->user_dn)) {
            $hydrated->setUserDn($ldap->user_dn);
        }

        if (isset($ldap->host)) {
            $hydrated->setHost($ldap->host);
        }

        if (isset($ldap->port)) {
            $hydrated->setPort($ldap->port);
        }

        if (isset($ldap->encryption)) {
            $hydrated->setEncryption($ldap->encryption);
        }

        if (isset($ldap->protocol_version)) {
            $hydrated->setProtocolVersion($ldap->protocol_version);
        }

        if (isset($ldap->expired_accounts)) {
            $hydrated->setExpiredAccounts($ldap->expired_accounts);
        }

        if (isset($ldap->last_sync_at)) {
            $hydrated->setLastSyncAt(new DateTime($ldap->last_sync_at));
        }

        if (isset($ldap->ca_certificate)) {
            $hydrated->setCaCertificate($ldap->ca_certificate);
        }

        if (isset($ldap->firstname_key)) {
            $hydrated->setFirstnameKey($ldap->firstname_key);
        }

        if (isset($ldap->lastname_key)) {
            $hydrated->setLastnameKey($ldap->lastname_key);
        }

        return $hydrated;
    }
}
