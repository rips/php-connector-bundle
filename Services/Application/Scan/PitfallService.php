<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\PitfallsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\PitfallResponse;

class PitfallService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new PitfallService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all pitfalls for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return PitfallsResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->pitfalls()
            ->getAll($appId, $scanId, $queryParams);

        return new PitfallsResponse($response);
    }

    /**
     * Get pitfall for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $pitfallId
     * @param array $queryParams
     * @return PitfallResponse
     */
    public function getById($appId, $scanId, $pitfallId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->pitfalls()
            ->getById($appId, $scanId, $pitfallId, $queryParams);

        return new PitfallResponse($response);
    }
}
