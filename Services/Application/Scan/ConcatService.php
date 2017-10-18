<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\ConcatEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ConcatHydrator;

class ConcatService
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
     * Get all concats for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return ConcatEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $concats = $this->api
            ->applications()
            ->scans()
            ->concats()
            ->getAll($appId, $scanId, $queryParams);

        return ConcatHydrator::hydrateCollection($concats);
    }

    /**
     * Get concat for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $concatId
     * @return ConcatEntity
     */
    public function getById($appId, $scanId, $concatId)
    {
        $concat = $this->api
            ->applications()
            ->scans()
            ->concats()
            ->getById($appId, $scanId, $concatId);

        return ConcatHydrator::hydrate($concat);
    }
}
