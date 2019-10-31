<?php

namespace RIPS\ConnectorBundle\Hydrators\System;

use RIPS\ConnectorBundle\Entities\System\EmailEntity;
use stdClass;

class EmailHydrator
{
    /**
     * Hydrate a collection of email objects into a collection of
     * EmailEntity objects
     *
     * @param stdClass[] $emails
     * @return EmailEntity[]
     */
    public static function hydrateCollection(array $emails)
    {
        $hydrated = [];

        foreach ($emails as $email) {
            $hydrated[] = self::hydrate($email);
        }

        return $hydrated;
    }

    /**
     * Hydrate an email object into an EmailEntity object
     *
     * @param stdClass $email
     * @return EmailEntity
     */
    public static function hydrate(stdClass $email)
    {
        $hydrated = new EmailEntity();

        if (isset($email->id)) {
            $hydrated->setId($email->id);
        }

        if (isset($email->enabled)) {
            $hydrated->setEnabled($email->enabled);
        }

        if (isset($email->transport)) {
            $hydrated->setTransport($email->transport);
        }

        if (isset($email->host)) {
            $hydrated->setHost($email->host);
        }

        if (isset($email->port)) {
            $hydrated->setPort($email->port);
        }

        if (isset($email->username)) {
            $hydrated->setUsername($email->username);
        }

        if (isset($email->encryption)) {
            $hydrated->setEncryption($email->encryption);
        }

        if (isset($email->auth)) {
            $hydrated->setAuth($email->auth);
        }

        if (isset($email->sender)) {
            $hydrated->setSender($email->sender);
        }

        return $hydrated;
    }
}
