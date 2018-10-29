<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue\Origin;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Origin\TypesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Origin\TypeResponse;

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
     * @return TypesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->origins()
            ->types()
            ->getAll($queryParams);

        return new TypesResponse($response);
    }

    /**
     * Get type for origin by id
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
            ->origins()
            ->types()
            ->getById($typeId, $queryParams);

        return new TypeResponse($response);
    }
}
