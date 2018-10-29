<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\MarkupEntity;

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
     * @return MarkupEntity[]
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $markups = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->markups()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return MarkupHydrator::hydrateCollection($markups->getDecodedData());
    }

    /**
     * Get markup for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $markupId
     * @param array $queryParams
     * @return MarkupEntity
     */
    public function getById($appId, $scanId, $issueId, $markupId, array $queryParams = [])
    {
        $markup = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->markups()
            ->getById($appId, $scanId, $issueId, $markupId, $queryParams);

        return MarkupHydrator::hydrate($markup->getDecodedData());
    }
}
