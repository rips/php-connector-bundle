<?php

namespace RIPS\ConnectorBundle\Services\History;

use RIPS\ConnectorBundle\Responses\History\ScanResponse;
use RIPS\ConnectorBundle\Responses\History\ScansResponse;
use RIPS\ConnectorBundle\Responses\History\ScansStatsResponse;
use RIPS\ConnectorBundle\Services\APIService;

class ScanService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ScanService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all Scans
     *
     * @param array $queryParams
     * @return ScansResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->histories()->scans()->getAll($queryParams);

        return new ScansResponse($response);
    }

    /**
     * Get Scan by ID
     *
     * @param int $scanId
     * @param array $queryParams
     * @return ScanResponse
     */
    public function getById($scanId, array $queryParams = [])
    {
        $response = $this->api->histories()->scans()->getById($scanId, $queryParams);

        return new ScanResponse($response);
    }

    /**
     * Get stats
     *
     * @param array $queryParams
     * @return ScansStatsResponse
     */
    public function getStats(array $queryParams = [])
    {
        $response = $this->api->histories()->scans()->getStats($queryParams);

        return new ScansStatsResponse($response);
    }
}
