<?php

namespace RIPS\ConnectorBundle\Hydrators\OAuth2;

use stdClass;
use RIPS\ConnectorBundle\Entities\OAuth2\ClientEntity;

class ClientHydrator
{
    /**
     * Hydrate a collection of client object into a collection of
     * ClientEntity objects
     *
     * @param stdClass[] $clients
     * @return ClientEntity[]
     */
    public static function hydrateCollection(array $clients)
    {
        $hydrated = [];

        foreach ($clients as $client) {
            $hydrated[] = self::hydrate($client);
        }

        return $hydrated;
    }

    /**
     * Hydrate a client object into a ClientEntity object
     *
     * @param stdClass $client
     * @return ClientEntity
     */
    public static function hydrate(stdClass $client)
    {
        $hydrated = new ClientEntity();

        if (isset($client->id)) {
            $hydrated->setId($client->id);
        }

        if (isset($client->name)) {
            $hydrated->setName($client->name);
        }

        if (isset($client->randomId)) {
            $hydrated->setRandomId($client->randomId);
        }

        if (isset($client->secret)) {
            $hydrated->setSecret($client->secret);
        }

        if (isset($client->allowedGrantTypes)) {
            $hydrated->setAllowedGrantTypes($client->allowedGrantTypes);
        }

        if (isset($client->redirectUris)) {
            $hydrated->setRedirectUris($client->redirectUris);
        }

        return $hydrated;
    }
}
