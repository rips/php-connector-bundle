<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummaryHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;

class SummaryService
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
     * Get all summaries for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return SummaryEntity[]
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $summaries = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->summaries()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return SummaryHydrator::hydrateCollection($summaries);
    }

    /**
     * Get summary for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $summaryId
     * @param array $queryParams
     * @return SummaryEntity
     */
    public function getById($appId, $scanId, $issueId, $summaryId, array $queryParams = [])
    {
        $summary = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->summaries()
            ->getById($appId, $scanId, $issueId, $summaryId, $queryParams);

        return SummaryHydrator::hydrate($summary);
    }
}
