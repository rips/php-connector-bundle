<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\ComparisonResponse;

class ComparisonService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new IssueService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get comparison stats for a scan
     *
     * @param $appId
     * @param $scanId
     * @param array $queryParams
     * @return ComparisonResponse
     */
    public function getComparison($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->comparisons()
            ->getComparison($appId, $scanId, $queryParams);

        return new ComparisonResponse($response);
    }
}
