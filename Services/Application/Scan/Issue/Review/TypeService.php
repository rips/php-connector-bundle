<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue\Review;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Review\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Review\TypeHydrator;

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
     * Get all types for reviews
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
            ->reviews()
            ->types()
            ->getAll($queryParams);

        return TypeHydrator::hydrateCollection($types->getDecodedData());
    }

    /**
     * Get type for reviews by id
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
            ->reviews()
            ->types()
            ->getById($typeId, $queryParams);

        return TypeHydrator::hydrate($type->getDecodedData());
    }
}
