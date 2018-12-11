<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\IgnoredLocationBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\IgnoredLocationsResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\IgnoredLocationResponse;

class IgnoredLocationService
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
     * @return IgnoredLocationsResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->ignoredLocations()->getAll($appId, $profileId, $queryParams);

        return new IgnoredLocationsResponse($response);
    }

    /**
     * Get ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param array $queryParams
     * @return IgnoredLocationResponse
     */
    public function getById($appId, $profileId, $ignoreId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignoredLocations()->getById($appId, $profileId, $ignoreId, $queryParams);

        return new IgnoredLocationResponse($response);
    }

    /**
     * Create ignore for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param IgnoredLocationBuilder $input
     * @param array $queryParams
     * @return IgnoredLocationResponse
     */
    public function create($appId, $profileId, IgnoredLocationBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignoredLocations()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new IgnoredLocationResponse($response);
    }

    /**
     * Update ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param IgnoredLocationBuilder $input
     * @param array $queryParams
     * @return IgnoredLocationResponse
     */
    public function update($appId, $profileId, $ignoreId, IgnoredLocationBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignoredLocations()->update($appId, $profileId, $ignoreId, $input->toArray(), $queryParams);

        return new IgnoredLocationResponse($response);
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
        $response = $this->api->applications()->profiles()->ignoredLocations()->deleteAll($appId, $profileId, $queryParams);

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
        $response = $this->api->applications()->profiles()->ignoredLocations()->deleteById($appId, $profileId, $ignoreId, $queryParams);

        return new BaseResponse($response);
    }
}
