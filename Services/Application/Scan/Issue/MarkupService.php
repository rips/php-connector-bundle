<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\MarkupsResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\MarkupResponse;

class MarkupService
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
     * Get all markups for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return MarkupsResponse
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->markups()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return new MarkupsResponse($response);
    }

    /**
     * Get markup for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $markupId
     * @param array $queryParams
     * @return MarkupResponse
     */
    public function getById($appId, $scanId, $issueId, $markupId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->markups()
            ->getById($appId, $scanId, $issueId, $markupId, $queryParams);

        return new MarkupResponse($response);
    }
}
