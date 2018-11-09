<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile;
use RIPS\ConnectorBundle\InputBuilders\Application\ProfileBuilder;
use RIPS\ConnectorBundle\Responses\Application\ProfilesResponse;
use RIPS\ConnectorBundle\Responses\Application\ProfileResponse;

class ProfileService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ProfileService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all profile profiles for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return ProfilesResponse
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->getAll($appId, $queryParams);

        return new ProfilesResponse($response);
    }

    /**
     * Get profile for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return ProfileResponse
     */
    public function getById($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->getById($appId, $profileId, $queryParams);

        return new ProfileResponse($response);
    }

    /**
     * Create a profile profile for an application
     *
     * @param int $appId
     * @param ProfileBuilder $input
     * @param array $queryParams
     * @return ProfileResponse
     */
    public function create($appId, ProfileBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->create($appId, $input->toArray(), $queryParams);

        return new ProfileResponse($response);
    }

    /**
     * @param $appId
     * @param $profileId
     * @param Profile\CloneBuilder $input
     * @param array $queryParams
     * @return ProfileResponse
     */
    public function cloneById($appId, $profileId, Profile\CloneBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->cloneById($appId, $profileId, $input->toArray(), $queryParams);

        return new ProfileResponse($response);
    }

    /**
     * Update a profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param ProfileBuilder $input
     * @param array $queryParams
     * @return ProfileResponse
     */
    public function update($appId, $profileId, ProfileBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->update($appId, $profileId, $input->toArray(), $queryParams);

        return new ProfileResponse($response);
    }

    /**
     * Delete all profile profiles for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->deleteAll($appId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete a profile profile for an application by id
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->deleteById($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }
}
