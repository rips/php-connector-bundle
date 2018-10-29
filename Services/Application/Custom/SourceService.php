<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SourceBuilder;
use RIPS\ConnectorBundle\Responses\Application\Custom\SourcesResponse;
use RIPS\ConnectorBundle\Responses\Application\Custom\SourceResponse;

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
     * Get all sources for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SourcesResponse
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $response = $this->api->applications()->customs()->sources()->getAll($appId, $customId, $queryParams);

        return new SourcesResponse($response);
    }

    /**
     * Get source for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sourceId
     * @param array $queryParams
     * @return SourceResponse
     */
    public function getById($appId, $customId, $sourceId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sources()->getById($appId, $customId, $sourceId, $queryParams);

        return new SourceResponse($response);
    }

    /**
     * Create source for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SourceBuilder $input
     * @param array $queryParams
     * @return SourceResponse
     */
    public function create($appId, $customId, SourceBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sources()->create($appId, $customId, $input->toArray(), $queryParams);

        return new SourceResponse($response);
    }

    /**
     * Update source for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sourceId
     * @param SourceBuilder $input
     * @param array $queryParams
     * @return SourceResponse
     */
    public function update($appId, $customId, $sourceId, SourceBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sources()->update($appId, $customId, $sourceId, $input->toArray(), $queryParams);

        return new SourceResponse($response);
    }

    /**
     * Delete all sources for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sources()->deleteAll($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete source for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sourceId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, $sourceId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sources()->deleteById($appId, $customId, $sourceId, $queryParams);

        return new BaseResponse($response);
    }
}
