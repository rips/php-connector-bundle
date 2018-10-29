<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Source;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\Source\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Source\TypeHydrator;

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
     * Get all types for an issue source
     *
     * @param array $queryParams
     * @return TypeEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $types = $this->api
            ->applications()
            ->scans()
            ->sources()
            ->types()
            ->getAll($queryParams);

        return TypeHydrator::hydrateCollection($types->getDecodedData());
    }

    /**
     * Get type for issue source by id
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
            ->sources()
            ->types()
            ->getById($typeId, $queryParams);

        return TypeHydrator::hydrate($type->getDecodedData());
    }
}
