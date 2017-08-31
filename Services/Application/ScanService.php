<?php

namespace RIPS\ConnectorBundle\Services\Application;

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
     * @param \APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all Scans
     *
     * @param  int $id
     * @return array <ScanEntity>
     */
    public function getAll(int $id)
    {
        $scans = $this->api->scans()->getAll($id);
        return ScanHydrator::hydrateCollection($scans);
    }

    /**
     * Get Scan by ID
     *
     * @param int $scanID
     * @param $applicationID
     * @return array ScanEntity
     */
    public function getById(int $applicationID,int $scanID)
    {
        $scans = $this->api->scans()->getById($applicationID,$scanID);
        return ScanHydrator::hydrateCollection($scans);
    }

    /**
     * Get Stats
     *
     * @param int $applicationID
     * @param int $scanID
     * @return array ScanEntity
     */
    public function getStats(int $applicationID, int $scanID)
    {
        $scans = $this->api->scans()->getStatsById($applicationID,$scanID);
        return ScanHydrator::hydrateCollection(($scans));
    }
}
