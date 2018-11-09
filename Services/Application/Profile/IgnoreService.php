<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\IgnoreBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\IgnoresResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\IgnoreResponse;

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
     * Get all ignores for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return IgnoresResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->ignores()->getAll($appId, $profileId, $queryParams);

        return new IgnoresResponse($response);
    }

    /**
     * Get ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param array $queryParams
     * @return IgnoreResponse
     */
    public function getById($appId, $profileId, $ignoreId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignores()->getById($appId, $profileId, $ignoreId, $queryParams);

        return new IgnoreResponse($response);
    }

    /**
     * Create ignore for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param IgnoreBuilder $input
     * @param array $queryParams
     * @return IgnoreResponse
     */
    public function create($appId, $profileId, IgnoreBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignores()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new IgnoreResponse($response);
    }

    /**
     * Update ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param IgnoreBuilder $input
     * @param array $queryParams
     * @return IgnoreResponse
     */
    public function update($appId, $profileId, $ignoreId, IgnoreBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignores()->update($appId, $profileId, $ignoreId, $input->toArray(), $queryParams);

        return new IgnoreResponse($response);
    }

    /**
     * Delete all ignores for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignores()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $ignoreId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignores()->deleteById($appId, $profileId, $ignoreId, $queryParams);

        return new BaseResponse($response);
    }
}
