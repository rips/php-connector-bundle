<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\TypesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\TypeResponse;

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
     * @return TypesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->types()
            ->getAll($queryParams);

        return new TypesResponse($response);
    }

    /**
     * Get type for issues by id
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
            ->types()
            ->getById($typeId, $queryParams);

        return new TypeResponse($response);
    }
}
