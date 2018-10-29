<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\CustomFunctionBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\CustomFunctionsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\CustomFunctionResponse;

class CustomFunctionService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new CustomFunctionService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all custom functions for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return CustomFunctionsResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->functions()
            ->getAll($appId, $scanId, $queryParams);

        return new CustomFunctionsResponse($response);
    }

    /**
     * Get custom function for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $functionId
     * @param array $queryParams
     * @return CustomFunctionResponse
     */
    public function getById($appId, $scanId, $functionId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->functions()
            ->getById($appId, $scanId, $functionId, $queryParams);

        return new CustomFunctionResponse($response);
    }

    /**
     * Create custom function for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param CustomFunctionBuilder $input
     * @param array $queryParams
     * @return CustomFunctionResponse
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->functions()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return new CustomFunctionResponse($response);
    }
}
