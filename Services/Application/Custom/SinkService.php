<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SinkBuilder;
use RIPS\ConnectorBundle\Responses\Application\Custom\SinksResponse;
use RIPS\ConnectorBundle\Responses\Application\Custom\SinkResponse;

class SinkService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SinkService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sinks for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SinksResponse
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $response = $this->api->applications()->customs()->sinks()->getAll($appId, $customId, $queryParams);

        return new SinksResponse($response);
    }

    /**
     * Get sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param array $queryParams
     * @return SinkResponse
     */
    public function getById($appId, $customId, $sinkId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sinks()->getById($appId, $customId, $sinkId, $queryParams);

        return new SinkResponse($response);
    }

    /**
     * Create sink for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SinkBuilder $input
     * @param array $queryParams
     * @return SinkResponse
     */
    public function create($appId, $customId, SinkBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sinks()->create($appId, $customId, $input->toArray(), $queryParams);

        return new SinkResponse($response);
    }

    /**
     * Update sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param SinkBuilder $input
     * @param array $queryParams
     * @return SinkResponse
     */
    public function update($appId, $customId, $sinkId, SinkBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sinks()->update($appId, $customId, $sinkId, $input->toArray(), $queryParams);

        return new SinkResponse($response);
    }

    /**
     * Delete all sink for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sinks()->deleteAll($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, $sinkId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sinks()->deleteById($appId, $customId, $sinkId, $queryParams);

        return new BaseResponse($response);
    }
}
