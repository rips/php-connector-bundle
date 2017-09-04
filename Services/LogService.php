<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\LogHydrator;
use RIPS\ConnectorBundle\InputBuilders\LogBuilder;
use RIPS\ConnectorBundle\Entities\LogEntity;

class LogService
{
    // @var API
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
     * @param  array $queryParams
     * @return array<OrgEntity>
     */
    public function getAll(array $queryParams = [])
    {
        $orgs = $this->api->logs()->getAll($queryParams);

        return LogHydrator::hydrateCollection($orgs);
    }

    /**
     * Get a log by id
     *
     * @param  int $logId
     * @return LogEntity
     */
    public function getById(int $logId)
    {
        $log = $this->api->logs()->getById($logId);

        return LogHydrator::hydrate($log);
    }

    /**
     * Create a new log
     *
     * @param  LogBuilder $input
     * @return LogEntity
     */
    public function create(LogBuilder $input)
    {
        $log = $this->api->logs()->create($input->toArray());

        return LogHydrator::hydrate($log);
    }
}
