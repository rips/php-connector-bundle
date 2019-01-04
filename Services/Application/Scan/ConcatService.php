<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\ConcatsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\ConcatResponse;

class ConcatService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ConcatService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all concats for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return ConcatsResponse
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->concats()
            ->getAll($appId, $scanId, $queryParams);

        return new ConcatsResponse($response);
    }

    /**
     * Get concat for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $concatId
     * @param array $queryParams
     * @return ConcatResponse
     */
    public function getById($appId, $scanId, $concatId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->concats()
            ->getById($appId, $scanId, $concatId, $queryParams);

        return new ConcatResponse($response);
    }
}
