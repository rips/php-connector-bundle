<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\SourcesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\SourceResponse;

class SourceService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SourceService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sources for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return SourcesResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->sources()
            ->getAll($appId, $scanId, $queryParams);

        return new SourcesResponse($response);
    }

    /**
     * Get source for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $sourceId
     * @param array $queryParams
     * @return SourceResponse
     */
    public function getById($appId, $scanId, $sourceId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->sources()
            ->getById($appId, $scanId, $sourceId, $queryParams);

        return new SourceResponse($response);
    }
}
