<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\IssueBuilder;

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
     * @return IssueEntity[]
     */
    public function getAll($applicationID, $scanID, array $queryParams = [])
    {
        $issues = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->getAll($applicationID, $scanID, $queryParams);

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
        $stats = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->getStats($appId, $scanId, $queryParams);

        return $stats;
    }

    /**
     * Get issue for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return IssueEntity
     */
    public function getById($appId, $scanId, $issueId, array $queryParams = [])
    {
        $issue = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->getById($appId, $scanId, $issueId, $queryParams);

        return IssueHydrator::hydrate($issue);
    }

    /**
     * Create a new issue for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param IssueBuilder $input
     * @param array $queryParams
     * @return IssueEntity
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $issue = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return IssueHydrator::hydrate($issue);
    }
}
