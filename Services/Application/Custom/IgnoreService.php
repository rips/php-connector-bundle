<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\IgnoreBuilder;
use RIPS\ConnectorBundle\Responses\Application\Custom\IgnoresResponse;
use RIPS\ConnectorBundle\Responses\Application\Custom\IgnoreResponse;

class IgnoreService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new IgnoreService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all ignores for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return IgnoresResponse
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $response = $this->api->applications()->customs()->ignores()->getAll($appId, $customId, $queryParams);

        return new IgnoresResponse($response);
    }

    /**
     * Get ignore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $ignoreId
     * @param array $queryParams
     * @return IgnoreResponse
     */
    public function getById($appId, $customId, $ignoreId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->ignores()->getById($appId, $customId, $ignoreId, $queryParams);

        return new IgnoreResponse($response);
    }

    /**
     * Create ignore for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param IgnoreBuilder $input
     * @param array $queryParams
     * @return IgnoreResponse
     */
    public function create($appId, $customId, IgnoreBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->ignores()->create($appId, $customId, $input->toArray(), $queryParams);

        return new IgnoreResponse($response);
    }

    /**
     * Update ignore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $ignoreId
     * @param IgnoreBuilder $input
     * @param array $queryParams
     * @return IgnoreResponse
     */
    public function update($appId, $customId, $ignoreId, IgnoreBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->ignores()->update($appId, $customId, $ignoreId, $input->toArray(), $queryParams);

        return new IgnoreResponse($response);
    }

    /**
     * Delete all ignores for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->ignores()->deleteAll($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete ignore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $ignoreId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, $ignoreId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->ignores()->deleteById($appId, $customId, $ignoreId, $queryParams);

        return new BaseResponse($response);
    }
}
