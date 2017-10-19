<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ProcessHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\Process\AddBuilder;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\Process\UpdateBuilder;
use RIPS\ConnectorBundle\Services\APIService;

class ProcessService
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
     * Get all processes for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return ProcessEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $processes = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->getAll($appId, $scanId, $queryParams);

        return ProcessHydrator::hydrateCollection($processes);
    }

    /**
     * Get process for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $processId
     * @return ProcessEntity
     */
    public function getById($appId, $scanId, $processId)
    {
        $process = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->getById($appId, $scanId, $processId);

        return ProcessHydrator::hydrate($process);
    }

    /**
     * Create a process for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param AddBuilder $input
     * @return ProcessEntity
     */
    public function create($appId, $scanId, $input)
    {
        $process = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->create($appId, $scanId, $input->toArray());

        return ProcessHydrator::hydrate($process);
    }

    /**
     * Update a process for a service
     *
     * @param int $appId
     * @param int $scanId
     * @param int $processId
     * @param UpdateBuilder $input
     * @return ProcessEntity
     */
    public function update($appId, $scanId, $processId, $input)
    {
        $process = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->update($appId, $scanId, $processId, $input->toArray());

        return ProcessHydrator::hydrate($process);
    }
}
