<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Services\APIService;

class ScanService
{
    /**
     * @var API
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
     * @param  int|null $applicationId
     * @param  array $queryParams
     * @return array<ScanEntity>
     */
    public function getAll(int $applicationId = null, array $queryParams = [])
    {
        $scans = $this->api->scans()->getAll($applicationId, $queryParams);
        return ScanHydrator::hydrateCollection($scans);
    }

    /**
     * Get Scan by ID
     *
     * @param int $applicationId
     * @param int $scanId
     * @return ScanEntity
     */
    public function getById(int $applicationId, int $scanId)
    {
        $scans = $this->api->scans()->getById($applicationId, $scanId);
        return ScanHydrator::hydrate($scans);
    }

    /**
     * Get Stats
     *
     * @param int $applicationID
     * @param int $scanID
     * @return ScanEntity
     */
    public function getStats(int $applicationID, int $scanID)
    {
        $scans = $this->api->scans()->getStatsById($applicationID,$scanID);
        return ScanHydrator::hydrate($scans);
    }
}
