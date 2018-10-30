<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\SinksResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\SinkResponse;

class SinkService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SinkService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sinks for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return SinksResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->sinks()
            ->getAll($appId, $scanId, $queryParams);

        return new SinksResponse($response);
    }

    /**
     * Get sink for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $sinkId
     * @param array $queryParams
     * @return SinkResponse
     */
    public function getById($appId, $scanId, $sinkId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->sinks()
            ->getById($appId, $scanId, $sinkId, $queryParams);

        return new SinkResponse($response);
    }
}
