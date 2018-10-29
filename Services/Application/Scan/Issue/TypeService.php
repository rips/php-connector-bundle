<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;

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
     * Get all types for issues
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
            ->types()
            ->getAll($queryParams);

        return TypeHydrator::hydrateCollection($types->getDecodedData());
    }

    /**
     * Get type for issues by id
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
            ->types()
            ->getById($typeId, $queryParams);

        return TypeHydrator::hydrate($type->getDecodedData());
    }
}
