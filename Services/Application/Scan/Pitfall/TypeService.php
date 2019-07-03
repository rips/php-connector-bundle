<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Pitfall;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Pitfall\TypesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Pitfall\TypeResponse;

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
     * Get all types for an issue pitfall
     *
     * @param array $queryParams
     * @return TypesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->pitfalls()
            ->types()
            ->getAll($queryParams);

        return new TypesResponse($response);
    }

    /**
     * Get type for issue pitfall by id
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
            ->pitfalls()
            ->types()
            ->getById($typeId, $queryParams);

        return new TypeResponse($response);
    }
}
