<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\SummariesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\SummaryResponse;


class SummaryService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SummaryService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all summaries for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return SummariesResponse
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->summaries()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return new SummariesResponse($response);
    }

    /**
     * Get summary for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $summaryId
     * @param array $queryParams
     * @return SummaryResponse
     */
    public function getById($appId, $scanId, $issueId, $summaryId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->summaries()
            ->getById($appId, $scanId, $issueId, $summaryId, $queryParams);

        return new SummaryResponse($response);
    }
}
