<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue\Patch;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Patch\TypesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Patch\TypeResponse;

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
     * Get all types for patches
     *
     * @param array $queryParams
     * @return TypesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->patches()
            ->types()
            ->getAll($queryParams);

        return new TypesResponse($response);
    }

    /**
     * Get type for patches by id
     *
     * @param int $typeId
     * @param array $queryParams
     * @return TypeResponse
     */
    public function getById($typeId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->patches()
            ->types()
            ->getById($typeId, $queryParams);

        return new TypeResponse($response);
    }
}
