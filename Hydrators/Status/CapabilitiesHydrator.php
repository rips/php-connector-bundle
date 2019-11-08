<?php

namespace RIPS\ConnectorBundle\Hydrators\Status;

use RIPS\ConnectorBundle\Entities\Status\CapabilitiesEntity;

class CapabilitiesHydrator
{
    /**
     * Hydrate a status capabilities object into a CapabilitiesEntity object
     *
     * @param \stdClass $capabilities
     * @return CapabilitiesEntity
     */
    public static function hydrate(\stdClass $capabilities)
    {
        $hydrated = new CapabilitiesEntity();

        if (isset($capabilities->reset_password)) {
            $hydrated->setResetPassword($capabilities->reset_password);
        }

        if (isset($capabilities->invite_user)) {
            $hydrated->setInviteUser($capabilities->invite_user);
        }

        if (isset($capabilities->send_email)) {
            $hydrated->setSendEmail($capabilities->send_email);
        }

        if (isset($capabilities->ldap)) {
            $hydrated->setLdap($capabilities->ldap);
        }

        return $hydrated;
    }
}
