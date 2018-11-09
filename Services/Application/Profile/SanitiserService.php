<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\SanitiserBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\SanitisersResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\SanitiserResponse;

class SanitiserService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SanitiserService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sanitisers for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return SanitisersResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->sanitisers()->getAll($appId, $profileId, $queryParams);

        return new SanitisersResponse($response);
    }

    /**
     * Get sanitiser for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sanitiserId
     * @param array $queryParams
     * @return SanitiserResponse
     */
    public function getById($appId, $profileId, $sanitiserId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitisers()->getById($appId, $profileId, $sanitiserId, $queryParams);

        return new SanitiserResponse($response);
    }

    /**
     * Create sanitiser for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param SanitiserBuilder $input
     * @param array $queryParams
     * @return SanitiserResponse
     */
    public function create($appId, $profileId, SanitiserBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitisers()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new SanitiserResponse($response);
    }

    /**
     * Update sanitiser for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sanitiserId
     * @param SanitiserBuilder $input
     * @param array $queryParams
     * @return SanitiserResponse
     */
    public function update($appId, $profileId, $sanitiserId, SanitiserBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitisers()->update($appId, $profileId, $sanitiserId, $input->toArray(), $queryParams);

        return new SanitiserResponse($response);
    }

    /**
     * Delete all sanitiser for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitisers()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete sanitiser for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $sanitiserId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $sanitiserId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->sanitisers()->deleteById($appId, $profileId, $sanitiserId, $queryParams);

        return new BaseResponse($response);
    }
}
