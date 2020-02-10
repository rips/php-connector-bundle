<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\Server\SystemBuilder;
use RIPS\ConnectorBundle\InputBuilders\ServerBuilder;
use RIPS\ConnectorBundle\Responses\ServersResponse;
use RIPS\ConnectorBundle\Responses\ServerResponse;

class ServerService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ServerService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all servers
     *
     * @param array $queryParams
     * @return ServersResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->servers()->getAll($queryParams);

        return new ServersResponse($response);
    }

    /**
     * Get server by id
     *
     * @param int $serverId
     * @param array $queryParams
     * @return ServerResponse
     */
    public function getById($serverId, array $queryParams = [])
    {
        $response = $this->api->servers()->getById($serverId, $queryParams);

        return new ServerResponse($response);
    }

    /**
     * Create a new server
     *
     * @param ServerBuilder $input
     * @param array $queryParams
     * @return ServerResponse
     */
    public function create(ServerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->servers()->create($input->toArray(), $queryParams);

        return new ServerResponse($response);
    }

    /**
     * Update an existing server
     *
     * @param int $serverId
     * @param ServerBuilder $input
     * @param array $queryParams
     * @return ServerResponse
     */
    public function update($serverId, ServerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->servers()->update($serverId, $input->toArray(), $queryParams);

        return new ServerResponse($response);
    }

    /**
     * Ping an existing server
     *
     * @param int $serverId
     * @param SystemBuilder $input
     * @param array $queryParams
     * @return ServerResponse
     */
    public function ping($serverId, SystemBuilder $input, array $queryParams = [])
    {
        $response = $this->api->servers()->ping($serverId, $input, $queryParams);

        return new ServerResponse($response);
    }
}
