<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Responses\Application\Scan\IssueStatsResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\IssueBuilder;
use RIPS\ConnectorBundle\Responses\Application\Scan\IssuesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\IssueResponse;

class IssueService
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
     * Get all issue for a scan
     *
     * @param int $applicationID
     * @param int $scanID
     * @param array $queryParams
     * @return IssuesResponse
     */
    public function getAll($applicationID, $scanID, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->getAll($applicationID, $scanID, $queryParams);

        return new IssuesResponse($response);
    }

    /**
     * Get stats for all issues of scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return IssueStatsResponse
     */
    public function getStats($appId, $scanId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->getStats($appId, $scanId, $queryParams);

        return new IssueStatsResponse($response);
    }

    /**
     * Get issue for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return IssueResponse
     */
    public function getById($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->getById($appId, $scanId, $issueId, $queryParams);

        return new IssueResponse($response);
    }

    /**
     * Create a new issue for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param IssueBuilder $input
     * @param array $queryParams
     * @return IssueResponse
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return new IssueResponse($response);
    }
}
