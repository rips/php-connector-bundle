<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\ProcessBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\ProcessesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\ProcessResponse;

class ProcessService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ProcessService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all processes for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return ProcessesResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->getAll($appId, $scanId, $queryParams);

        return new ProcessesResponse($response);
    }

    public function deleteAll($appId, $scanId)
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->deleteAll($appId, $scanId);

        return new BaseResponse($response);
    }

    /**
     * Get process for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $processId
     * @param array $queryParams
     * @return ProcessResponse
     */
    public function getById($appId, $scanId, $processId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->getById($appId, $scanId, $processId, $queryParams);

        return new ProcessResponse($response);
    }

    /**
     * Create a process for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param ProcessBuilder $input
     * @param array $queryParams
     * @return ProcessResponse
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return new ProcessResponse($response);
    }

    /**
     * Update a process for a service
     *
     * @param int $appId
     * @param int $scanId
     * @param int $processId
     * @param ProcessBuilder $input
     * @param array $queryParams
     * @return ProcessResponse
     */
    public function update($appId, $scanId, $processId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->update($appId, $scanId, $processId, $input->toArray(), $queryParams);

        return new ProcessResponse($response);
    }
}
