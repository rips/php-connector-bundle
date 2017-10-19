<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\SinkEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SinkHydrator;

class SinkService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new OrgService instance
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
     * @return SinkEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $sinks = $this->api
            ->applications()
            ->scans()
            ->sinks()
            ->getAll($appId, $scanId, $queryParams);

        return SinkHydrator::hydrateCollection($sinks);
    }

    /**
     * Get sink for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $sinkId
     * @return SinkEntity
     */
    public function getById($appId, $scanId, $sinkId)
    {
        $sink = $this->api
            ->applications()
            ->scans()
            ->sinks()
            ->getById($appId, $scanId, $sinkId);

        return SinkHydrator::hydrate($sink);
    }
}
