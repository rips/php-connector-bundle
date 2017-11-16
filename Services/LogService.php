<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\LogHydrator;
use RIPS\ConnectorBundle\InputBuilders\LogBuilder;
use RIPS\ConnectorBundle\Entities\LogEntity;

class LogService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new LogService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all logs
     *
     * @param array $queryParams
     * @return LogEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $logs = $this->api->logs()->getAll($queryParams);

        return LogHydrator::hydrateCollection($logs);
    }

    /**
     * Get a log by id
     *
     * @param int $logId
     * @param array $queryParams
     * @return LogEntity
     */
    public function getById($logId, array $queryParams = [])
    {
        $log = $this->api->logs()->getById($logId, $queryParams);

        return LogHydrator::hydrate($log);
    }

    /**
     * Create a new log
     *
     * @param LogBuilder $input
     * @param array $queryParams
     * @return LogEntity
     */
    public function create(LogBuilder $input, array $queryParams = [])
    {
        $log = $this->api->logs()->create($input->toArray(), $queryParams);

        return LogHydrator::hydrate($log);
    }

    /**
     * Delete logs older than a week
     *
     * @param array $queryParams
     * @return void
     */
    public function delete(array $queryParams = [])
    {
        $this->api->logs()->delete($queryParams);
    }
}
