<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\ServerEntity;

class ServerHydrator
{
    /**
     * Hydrate a collection of server objects into a collection of
     * ServerEntity objects
     *
     * @param stdClass[] $servers
     * @return ServerEntity[]
     */
    public static function hydrateCollection(array $servers)
    {
        $hydrated = [];

        foreach ($servers as $server) {
            $hydrated[] = self::hydrate($server);
        }

        return $hydrated;
    }

    /**
     * Hydrate a server object into a ServerEntity object
     *
     * @param stdClass $server
     * @return ServerEntity
     */
    public static function hydrate(stdClass $server)
    {
        $hydrated = new ServerEntity();

        if (isset($server->id)) {
            $hydrated->setId($server->id);
        }

        if (isset($server->name)) {
            $hydrated->setName($server->name);
        }

        if (isset($server->internal_address)) {
            $hydrated->setInternalAddress($server->internal_address);
        }

        if (isset($server->external_address)) {
            $hydrated->setExternalAddress($server->external_address);
        }

        if (isset($server->type)) {
            $hydrated->setType($server->type);
        }

        if (isset($server->started_at)) {
            $hydrated->setStartedAt(new DateTime($server->started_at));
        }

        if (isset($server->stopped_at)) {
            $hydrated->setStoppedAt(new DateTime($server->stopped_at));
        }

        if (isset($server->memory)) {
            $hydrated->setMemory($server->memory);
        }

        if (isset($server->cores)) {
            $hydrated->setCores($server->cores);
        }

        if (isset($server->last_seen_at)) {
            $hydrated->setLastSeenAt(new DateTime($server->last_seen_at));
        }

        return $hydrated;
    }
}
