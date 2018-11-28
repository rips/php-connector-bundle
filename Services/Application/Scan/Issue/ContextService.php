<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\ContextsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\ContextResponse;

class ContextService
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
     * Get all contexts for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return ContextsResponse
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->contexts()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return new ContextsResponse($response);
    }

    /**
     * Get context for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $contextId
     * @param array $queryParams
     * @return ContextResponse
     */
    public function getById($appId, $scanId, $issueId, $contextId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->contexts()
            ->getById($appId, $scanId, $issueId, $contextId, $queryParams);

        return new ContextResponse($response);
    }
}
