<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\SinkBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\SinksResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\SinkResponse;

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
     * Get all sinks for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return SinksResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->sinks()->getAll($appId, $profileId, $queryParams);

        return new SinksResponse($response);
    }

    /**
     * Get sink for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sinkId
     * @param array $queryParams
     * @return SinkResponse
     */
    public function getById($appId, $profileId, $sinkId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sinks()->getById($appId, $profileId, $sinkId, $queryParams);

        return new SinkResponse($response);
    }

    /**
     * Create sink for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param SinkBuilder $input
     * @param array $queryParams
     * @return SinkResponse
     */
    public function create($appId, $profileId, SinkBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sinks()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new SinkResponse($response);
    }

    /**
     * Update sink for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sinkId
     * @param SinkBuilder $input
     * @param array $queryParams
     * @return SinkResponse
     */
    public function update($appId, $profileId, $sinkId, SinkBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sinks()->update($appId, $profileId, $sinkId, $input->toArray(), $queryParams);

        return new SinkResponse($response);
    }

    /**
     * Delete all sink for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sinks()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete sink for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sinkId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $sinkId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sinks()->deleteById($appId, $profileId, $sinkId, $queryParams);

        return new BaseResponse($response);
    }
}
