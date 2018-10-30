<?php

namespace RIPS\ConnectorBundle\Services\OAuth2;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\OAuth2\ClientBuilder;
use RIPS\ConnectorBundle\Responses\OAuth2\ClientsResponse;
use RIPS\ConnectorBundle\Responses\OAuth2\ClientResponse;

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
     * @return ClientsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->oauth2()->clients()->getAll($queryParams);

        return new ClientsResponse($response);
    }

    /**
     * Get a client by id
     *
     * @param int $clientId
     * @param array $queryParams
     * @return ClientResponse
     */
    public function getById($clientId, array $queryParams = [])
    {
        $response = $this->api->oauth2()->clients()->getById($clientId, $queryParams);

        return new ClientResponse($response);
    }

    /**
     * Create a new client
     *
     * @param ClientBuilder $input
     * @param array $queryParams
     * @return ClientResponse
     */
    public function create(ClientBuilder $input, array $queryParams = [])
    {
        $response = $this->api->oauth2()->clients()->create($input->toArray(), $queryParams);

        return new ClientResponse($response);
    }

    /**
     * Update a client
     *
     * @param int $clientId
     * @param ClientBuilder $input
     * @param array $queryParams
     * @return ClientResponse
     */
    public function update($clientId, ClientBuilder $input, array $queryParams = [])
    {
        $response = $this->api->oauth2()->clients()->update($clientId, $input->toArray(), $queryParams);

        return new ClientResponse($response);
    }

    /**
     * Delete a client
     *
     * @param int $clientId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function delete($clientId, array $queryParams)
    {
        $response = $this->api->oauth2()->clients()->delete($clientId, $queryParams);

        return new BaseResponse($response);
    }
}
