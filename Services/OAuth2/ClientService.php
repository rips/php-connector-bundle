<?php

namespace RIPS\ConnectorBundle\Services\OAuth2;

use RIPS\ConnectorBundle\Entities\OAuth2\ClientEntity;
use RIPS\ConnectorBundle\Hydrators\OAuth2\ClientHydrator;
use RIPS\ConnectorBundle\InputBuilders\OAuth2\ClientBuilder;
use RIPS\ConnectorBundle\Services\APIService;

class ClientService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ClientService instance
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all clients
     *
     * @param array $queryParams
     * @return ClientEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $clients = $this->api->clients()->getAll($queryParams);

        return ClientHydrator::hydrateCollection($clients);
    }

    /**
     * Get a client by id
     *
     * @param int $clientId
     * @param array $queryParams
     * @return ClientEntity
     */
    public function getById($clientId, array $queryParams = [])
    {
        $client = $this->api->clients()->getById($clientId, $queryParams);

        return ClientHydrator::hydrate($client);
    }

    /**
     * Create a new client
     *
     * @param ClientBuilder $input
     * @param array $queryParams
     * @return ClientEntity
     */
    public function create(ClientBuilder $input, array $queryParams = [])
    {
        $client = $this->api->clients()->create($input->toArray(), $queryParams);

        return ClientHydrator::hydrate($client);
    }

    /**
     * Update a client
     *
     * @param int $clientId
     * @param ClientBuilder $input
     * @param array $queryParams
     * @return ClientEntity
     */
    public function update($clientId, ClientBuilder $input, array $queryParams = [])
    {
        $client = $this->api->clients()->update($clientId, $input->toArray(), $queryParams);

        return ClientHydrator::hydrate($client);
    }

    /**
     * Delete a client
     *
     * @param int $clientId
     * @param array $queryParams
     * @return void
     */
    public function delete($clientId, array $queryParams)
    {
        $this->api->clients()->delete($clientId, $queryParams);
    }
}
