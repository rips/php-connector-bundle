<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue\Sink;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Sink\TypeHydrator;

class TypeService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new IssueService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all types for an issue sink
     *
     * @param array $queryParams
     * @return TypeEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $types = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->sinks()
            ->types()
            ->getAll($queryParams);

        return TypeHydrator::hydrateCollection($types);
    }

    /**
     * Get type for issue sink by id
     *
     * @param int $typeId
     * @param array $queryParams
     * @return TypeEntity
     */
    public function getById($typeId, array $queryParams = [])
    {
        $type = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->sinks()
            ->types()
            ->getById($typeId, $queryParams);

        return TypeHydrator::hydrate($type);
    }
}
