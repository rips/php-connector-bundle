<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\SourceBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\SourcesResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\SourceResponse;

class SourceService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SourceService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sources for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return SourcesResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->sources()->getAll($appId, $profileId, $queryParams);

        return new SourcesResponse($response);
    }

    /**
     * Get source for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sourceId
     * @param array $queryParams
     * @return SourceResponse
     */
    public function getById($appId, $profileId, $sourceId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sources()->getById($appId, $profileId, $sourceId, $queryParams);

        return new SourceResponse($response);
    }

    /**
     * Create source for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param SourceBuilder $input
     * @param array $queryParams
     * @return SourceResponse
     */
    public function create($appId, $profileId, SourceBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sources()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new SourceResponse($response);
    }

    /**
     * Update source for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sourceId
     * @param SourceBuilder $input
     * @param array $queryParams
     * @return SourceResponse
     */
    public function update($appId, $profileId, $sourceId, SourceBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sources()->update($appId, $profileId, $sourceId, $input->toArray(), $queryParams);

        return new SourceResponse($response);
    }

    /**
     * Delete all sources for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sources()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete source for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sourceId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $sourceId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sources()->deleteById($appId, $profileId, $sourceId, $queryParams);

        return new BaseResponse($response);
    }
}
