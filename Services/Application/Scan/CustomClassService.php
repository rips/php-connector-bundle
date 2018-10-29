<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\CustomClassBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\CustomClassesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\CustomClassResponse;

class CustomClassService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new CustomClassService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all custom classes for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return CustomClassesResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->classes()
            ->getAll($appId, $scanId, $queryParams);

        return new CustomClassesResponse($response);
    }

    /**
     * Get custom class for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $classId
     * @param array $queryParams
     * @return CustomClassResponse
     */
    public function getById($appId, $scanId, $classId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->classes()
            ->getById($appId, $scanId, $classId, $queryParams);

        return new CustomClassResponse($response);
    }

    /**
     * Create custom class for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param CustomClassBuilder $input
     * @param array $queryParams
     * @return CustomClassResponse
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->classes()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return new CustomClassResponse($response);
    }
}
