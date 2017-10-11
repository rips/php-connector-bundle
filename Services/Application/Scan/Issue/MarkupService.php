<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;

class MarkupService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new IssueService instance
     *
     * @param APIService
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
     * @return MarkupEntity[]
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $markups = $this->api->issues()->markups()->getAll($appId, $scanId, $issueId, $queryParams);

        return MarkupHydrator::hydrateCollection($markups);
    }

    /**
     * Get markup for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $markupId
     * @return MarkupEntity
     */
    public function getById($appId, $scanId, $issueId, $markupId)
    {
        $markup = $this->api->issues()->markups()->getById($appId, $scanId, $issueId, $markupId);

        return MarkupHydrator::hydrate($markup);
    }
}
