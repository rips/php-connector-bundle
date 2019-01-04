<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\SanitizerBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\SanitizersResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\SanitizerResponse;

class SanitizerService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SanitizerService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sanitizers for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return SanitizersResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->sanitizers()->getAll($appId, $profileId, $queryParams);

        return new SanitizersResponse($response);
    }

    /**
     * Get sanitizer for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sanitizerId
     * @param array $queryParams
     * @return SanitizerResponse
     */
    public function getById($appId, $profileId, $sanitizerId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitizers()->getById($appId, $profileId, $sanitizerId, $queryParams);

        return new SanitizerResponse($response);
    }

    /**
     * Create sanitizer for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param SanitizerBuilder $input
     * @param array $queryParams
     * @return SanitizerResponse
     */
    public function create($appId, $profileId, SanitizerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitizers()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new SanitizerResponse($response);
    }

    /**
     * Update sanitizer for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sanitizerId
     * @param SanitizerBuilder $input
     * @param array $queryParams
     * @return SanitizerResponse
     */
    public function update($appId, $profileId, $sanitizerId, SanitizerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitizers()->update($appId, $profileId, $sanitizerId, $input->toArray(), $queryParams);

        return new SanitizerResponse($response);
    }

    /**
     * Delete all sanitizer for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitizers()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete sanitizer for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sanitizerId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $sanitizerId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitizers()->deleteById($appId, $profileId, $sanitizerId, $queryParams);

        return new BaseResponse($response);
    }
}
