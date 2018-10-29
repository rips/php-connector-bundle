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

        return ProcessHydrator::hydrateCollection($processes->getDecodedData());
    }

    /**
     * Get process for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $processId
     * @param array $queryParams
     * @return ProcessEntity
     */
    public function getById($appId, $scanId, $processId, array $queryParams = [])
    {
        $process = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->getById($appId, $scanId, $processId, $queryParams);

        return ProcessHydrator::hydrate($process->getDecodedData());
    }

    /**
     * Create a process for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param AddBuilder $input
     * @param array $queryParams
     * @return ProcessEntity
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $process = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return ProcessHydrator::hydrate($process->getDecodedData());
    }

    /**
     * Update a process for a service
     *
     * @param int $appId
     * @param int $scanId
     * @param int $processId
     * @param UpdateBuilder $input
     * @param array $queryParams
     * @return ProcessEntity
     */
    public function update($appId, $scanId, $processId, $input, array $queryParams = [])
    {
        $process = $this->api
            ->applications()
            ->scans()
            ->processes()
            ->update($appId, $scanId, $processId, $input->toArray(), $queryParams);

        return ProcessHydrator::hydrate($process->getDecodedData());
    }
}
