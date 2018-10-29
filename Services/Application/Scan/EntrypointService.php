<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\EntrypointsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\EntrypointResponse;

class EntrypointService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new EntrypointService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all entrypoints for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return EntrypointsResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->entrypoints()
            ->getAll($appId, $scanId, $queryParams);

        return new EntrypointsResponse($response);
    }

    /**
     * Get entrypoint for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $entrypointId
     * @param array $queryParams
     * @return EntrypointResponse
     */
    public function getById($appId, $scanId, $entrypointId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->entrypoints()
            ->getById($appId, $scanId, $entrypointId, $queryParams);

        return new EntrypointResponse($response);
    }
}
