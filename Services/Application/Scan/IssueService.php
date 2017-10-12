<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;

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
     * @return IssueEntity[]
     */
    public function getAll($applicationID, $scanID)
    {
        $issues = $this->api->issues()->getAll($applicationID, $scanID);

        return IssueHydrator::hydrateCollection($issues);
    }

    /**
     * Get stats for all issues of scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return stdClass
     */
    public function getStats($appId, $scanId, array $queryParams = [])
    {
        $stats = $this->api->issues()->getStats($appId, $scanId, $queryParams);

        return $stats;
    }

    /**
     * Get issue for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @return IssueEntity
     */
    public function getById($appId, $scanId, $issueId)
    {
        $issue = $this->api->issues()->getById($appId, $scanId, $issueId);

        return IssueHydrator::hydrate($issue);
    }
}
