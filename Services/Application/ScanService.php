<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\AddBuilder;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\UpdateBuilder;

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
     * @param int|null $appId
     * @param array $queryParams
     * @return ScanEntity[]
     */
    public function getAll($appId = null, array $queryParams = [])
    {
        $scans = $this->api->applications()->scans()->getAll($appId, $queryParams);

        return ScanHydrator::hydrateCollection($scans);
    }

    /**
     * Get Scan by ID
     *
     * @param int $appId
     * @param int $scanId
     * @return ScanEntity
     */
    public function getById($appId, $scanId)
    {
        $scan = $this->api->applications()->scans()->getById($appId, $scanId);

        return ScanHydrator::hydrate($scan);
    }
    /**
     * Create a new scan
     *
     * @param int $appId
     * @param AddBuilder $input
     * @return ScanEntity
     */
    public function create($appId, $input)
    {
        $scan = $this->api->applications()->scans()->create($appId, $input->toArray());

        return ScanHydrator::hydrate($scan);
    }

    /**
     * Update an existing scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param UpdateBuilder $input
     * @return ScanEntity
     */
    public function update($appId, $scanId, $input)
    {
        $scan = $this->api->applications()->scans()->update($appId, $scanId, $input->toArray());

        return ScanHydrator::hydrate($scan);
    }

    /**
     * Delete all scans
     *
     * @param int $appId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $this->api->applications()->scans()->deleteAll($appId, $queryParams);
    }

    /**
     * Delete a scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @return void
     */
    public function deleteById($appId, $scanId)
    {
        $this->api->applications()->scans()->deleteById($appId, $scanId);
    }

    /**
     * Block until a scan is finished
     *
     * @param int $appId
     * @param int $scanId
     * @param int $waitTime - Optional time to wait in seconds. Waits indefinitely if 0
     * @param int $sleepTime - Time to wait between scan compoletion checks
     * @return void
     * @throws \Exception if scan does not finish in time
     */
    public function blockUntilDone($appId, $scanId, $waitTime = 0, $sleepTime = 5)
    {
        $this->api->applications()->scans()->blockUntilDone($appId, $scanId, $waitTime, $sleepTime);
    }
}
