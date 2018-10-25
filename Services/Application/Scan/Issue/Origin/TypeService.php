<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue\Origin;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Origin\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Origin\TypeHydrator;

class TypeService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new TypeService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all types for origin
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
            ->origins()
            ->types()
            ->getAll($queryParams);

        return TypeHydrator::hydrateCollection($types);
    }

    /**
     * Get type for origin by id
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
            ->origins()
            ->types()
            ->getById($typeId, $queryParams);

        return TypeHydrator::hydrate($type);
    }
}
