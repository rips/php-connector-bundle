<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom;
use RIPS\ConnectorBundle\InputBuilders\Application\CustomBuilder;
use RIPS\ConnectorBundle\Responses\Application\CustomsResponse;
use RIPS\ConnectorBundle\Responses\Application\CustomResponse;

class CustomService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new CustomService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all custom profiles for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return CustomsResponse
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->getAll($appId, $queryParams);

        return new CustomsResponse($response);
    }

    /**
     * Get custom for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return CustomResponse
     */
    public function getById($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->getById($appId, $customId, $queryParams);

        return new CustomResponse($response);
    }

    /**
     * Create a custom profile for an application
     *
     * @param int $appId
     * @param CustomBuilder $input
     * @param array $queryParams
     * @return CustomResponse
     */
    public function create($appId, CustomBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->create($appId, $input->toArray(), $queryParams);

        return new CustomResponse($response);
    }

    /**
     * @param $appId
     * @param $customId
     * @param Custom\CloneBuilder $input
     * @param array $queryParams
     * @return CustomResponse
     */
    public function cloneById($appId, $customId, Custom\CloneBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->cloneById($appId, $customId, $input->toArray(), $queryParams);

        return new CustomResponse($response);
    }

    /**
     * Update a custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param CustomBuilder $input
     * @param array $queryParams
     * @return CustomResponse
     */
    public function update($appId, $customId, CustomBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->update($appId, $customId, $input->toArray(), $queryParams);

        return new CustomResponse($response);
    }

    /**
     * Delete all custom profiles for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->deleteAll($appId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete a custom profile for an application by id
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->deleteById($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }
}
