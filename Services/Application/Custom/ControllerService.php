<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\ControllerBuilder;
use RIPS\ConnectorBundle\Responses\Application\Custom\ControllersResponse;
use RIPS\ConnectorBundle\Responses\Application\Custom\ControllerResponse;

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
     * Get all controllers for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return ControllersResponse
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $response = $this->api->applications()->customs()->controllers()->getAll($appId, $customId, $queryParams);

        return new ControllersResponse($response);
    }

    /**
     * Get controller for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $controllerId
     * @param array $queryParams
     * @return ControllerResponse
     */
    public function getById($appId, $customId, $controllerId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->controllers()->getById($appId, $customId, $controllerId, $queryParams);

        return new ControllerResponse($response);
    }

    /**
     * Create controller for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param ControllerBuilder $input
     * @param array $queryParams
     * @return ControllerResponse
     */
    public function create($appId, $customId, ControllerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->controllers()->create($appId, $customId, $input->toArray(), $queryParams);

        return new ControllerResponse($response);
    }

    /**
     * Update controller for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $controllerId
     * @param ControllerBuilder $input
     * @param array $queryParams
     * @return ControllerResponse
     */
    public function update($appId, $customId, $controllerId, ControllerBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->controllers()->update($appId, $customId, $controllerId, $input->toArray(), $queryParams);

        return new ControllerResponse($response);
    }

    /**
     * Delete all controllers for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->controllers()->deleteAll($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete controller for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $controllerId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, $controllerId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->controllers()->deleteById($appId, $customId, $controllerId, $queryParams);

        return new BaseResponse($response);
    }
}
