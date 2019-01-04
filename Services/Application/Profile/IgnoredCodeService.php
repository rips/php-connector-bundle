<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\IgnoredCodeBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\IgnoredCodesResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\IgnoredCodeResponse;

class IgnoredCodeService
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
     * @return IgnoredCodesResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->ignoredCodes()->getAll($appId, $profileId, $queryParams);

        return new IgnoredCodesResponse($response);
    }

    /**
     * Get ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param array $queryParams
     * @return IgnoredCodeResponse
     */
    public function getById($appId, $profileId, $ignoreId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignoredCodes()->getById($appId, $profileId, $ignoreId, $queryParams);

        return new IgnoredCodeResponse($response);
    }

    /**
     * Create ignore for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param IgnoredCodeBuilder $input
     * @param array $queryParams
     * @return IgnoredCodeResponse
     */
    public function create($appId, $profileId, IgnoredCodeBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignoredCodes()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new IgnoredCodeResponse($response);
    }

    /**
     * Update ignore for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $ignoreId
     * @param IgnoredCodeBuilder $input
     * @param array $queryParams
     * @return IgnoredCodeResponse
     */
    public function update($appId, $profileId, $ignoreId, IgnoredCodeBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->ignoredCodes()->update($appId, $profileId, $ignoreId, $input->toArray(), $queryParams);

        return new IgnoredCodeResponse($response);
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
        $response = $this->api->applications()->profiles()->ignoredCodes()->deleteAll($appId, $profileId, $queryParams);

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
        $response = $this->api->applications()->profiles()->ignoredCodes()->deleteById($appId, $profileId, $ignoreId, $queryParams);

        return new BaseResponse($response);
    }
}
