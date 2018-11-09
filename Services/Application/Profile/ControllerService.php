<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\ControllerBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\ControllersResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\ControllerResponse;

class ControllerService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ControllerService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all controllers for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return ControllersResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->controllers()->getAll($appId, $profileId, $queryParams);

        return new ControllersResponse($response);
    }

    /**
     * Get controller for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $controllerId
     * @param array $queryParams
     * @return ControllerResponse
     */
    public function getById($appId, $profileId, $controllerId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->controllers()->getById($appId, $profileId, $controllerId, $queryParams);

        return new ControllerResponse($response);
    }

    /**
     * Create controller for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param ControllerBuilder $input
     * @param array $queryParams
     * @return ControllerResponse
     */
    public function create($appId, $profileId, ControllerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->controllers()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new ControllerResponse($response);
    }

    /**
     * Update controller for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $controllerId
     * @param ControllerBuilder $input
     * @param array $queryParams
     * @return ControllerResponse
     */
    public function update($appId, $profileId, $controllerId, ControllerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->controllers()->update($appId, $profileId, $controllerId, $input->toArray(), $queryParams);

        return new ControllerResponse($response);
    }

    /**
     * Delete all controllers for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->controllers()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete controller for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $controllerId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $controllerId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->controllers()->deleteById($appId, $profileId, $controllerId, $queryParams);

        return new BaseResponse($response);
    }
}
