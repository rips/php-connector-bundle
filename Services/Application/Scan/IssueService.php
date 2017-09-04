<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class IssueService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new IssueService instance
     *
     * @param \APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get a collection of issue objects
     *
     * @param  int $applicationID
     * @param int $scanID
     * @return array <IssueEntity>
     */
    public function getAll(int $applicationID, int $scanID)
    {
        $issues = $this->api->issues()->getAll($applicationID, $scanID);
        return IssueHydrator::hydrateCollection($issues);
    }

    /*
     * Get Issues by ID
     *
     * @param int $applicationID
     * @param int $scanID
     * @param int $issueID
     * @return array <IssueEntity>
     */
    /*public function getById(int $applicationID, int $scanID, int $issueID)
    {
       $issues = $this->api->issues()->getById($applicationID,$scanID,$issueID);
       return IssueHydrator::hydrateCollection($issues);
    }*/
}
