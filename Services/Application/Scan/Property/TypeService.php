<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Property;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Property\TypesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Property\TypeResponse;

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
     * @return TypesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->sinks()
            ->types()
            ->getAll($queryParams);

        return new TypesResponse($response);
    }

    /**
     * Get type for issue sink by id
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
            ->sinks()
            ->types()
            ->getById($typeId, $queryParams);

        return new TypeResponse($response);
    }
}
