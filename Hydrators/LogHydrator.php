<?php

namespace RIPS\ConnectorBundle\Hydrators;

use DateTime;
use stdClass;
use RIPS\ConnectorBundle\Entities\LogEntity;

class LogHydrator
{
    /**
     * Hydrate a collection of log objects into a collection of
     * LogEntity objects
     *
     * @param stdClass[] $logs
     * @return LogEntity[]
     */
    public static function hydrateCollection(array $logs)
    {
        $hydrated = [];

        foreach ($logs as $log) {
            $hydrated[] = self::hydrate($log);
        }

        return $hydrated;
    }

    /**
     * Hydrate a log object into a LogEntity object
     *
     * @param stdClass $log
     * @return LogEntity
     */
    public static function hydrate(stdClass $log)
    {
        $hydrated = new LogEntity();

        if (isset($log->id)) {
            $hydrated->setId($log->id);
        }

        if (isset($log->text)) {
            $hydrated->setText($log->text);
        }

        if (isset($log->level)) {
            $hydrated->setLevel($log->level);
        }

        if (isset($log->channel)) {
            $hydrated->setChannel($log->channel);
        }

        if (isset($log->request_uri)) {
            $hydrated->setRequestUri($log->request_uri);
        }

        if (isset($log->request_method)) {
            $hydrated->setRequestMethod($log->request_method);
        }

        if (isset($log->ip)) {
            $hydrated->setIp($log->ip);
        }

        if (isset($log->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($log->created_by));
        }

        if (isset($log->username)) {
            $hydrated->setUsername($log->username);
        }

        if (isset($log->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($log->organization));
        }

        if (isset($log->organization_name)) {
            $hydrated->setOrganizationName($log->organization_name);
        }

        if (isset($log->context)) {
            $hydrated->setContext($log->context);
        }

        if (isset($log->created_at)) {
            $hydrated->setCreatedAt(new DateTime($log->created_at));
        }

        return $hydrated;
    }
}
