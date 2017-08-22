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
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all Scans
     *
     * @param  int $id
     * @return array<ScanEntity>
     */
    public function getAll(int $id)
    {
        $scans = $this->api->scans()->getAll($id);
        return ScanHydrator::hydrateCollection($scans);
    }

    /**
     * Get Scan by ID
     *
     * @param int $id
     * @return array <ScanEntity>
     */
    public function getById(int $id)
    {
        $scans = $this->api->scans()->getById($id);
        return ScanHydrator::hydrateCollection($scans);
    }
}
