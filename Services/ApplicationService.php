<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\ApplicationBuilder;
use RIPS\ConnectorBundle\Responses\ApplicationsResponse;
use RIPS\ConnectorBundle\Responses\ApplicationResponse;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class ApplicationService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new UserService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all applications
     *
     * @param array $queryParams
     * @return ApplicationsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->applications()->getAll($queryParams);

        return new ApplicationsResponse($response);
    }

    /**
     * Get application by id
     *
     * @param int $appId
     * @param array $queryParams
     * @return ApplicationResponse
     */
    public function getById($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->getById($appId, $queryParams);

        return new ApplicationResponse($response);
    }

    /**
     * Create a new application
     *
     * @param ApplicationBuilder $input
     * @param array $queryParams
     * @return ApplicationResponse
     */
    public function create(ApplicationBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->create($input->toArray(), $queryParams);

        return new ApplicationResponse($response);
    }

    /**
     * Update an existing application
     *
     * @param int $appId
     * @param ApplicationBuilder $input
     * @param array $queryParams
     * @return ApplicationResponse
     */
    public function update($appId, ApplicationBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->update($appId, $input->toArray(), $queryParams);

        return new ApplicationResponse($response);
    }

    /**
     * Delete all applications
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->applications()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete application by id
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->deleteById($appId, $queryParams);

        return new BaseResponse($response);
    }
}
