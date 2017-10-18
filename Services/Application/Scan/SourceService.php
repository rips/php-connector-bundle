<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SourceHydrator;

class SourceService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new OrgService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sources for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return SourceEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $sources = $this->api
            ->applications()
            ->scans()
            ->sources()
            ->getAll($appId, $scanId, $queryParams);

        return SourceHydrator::hydrateCollection($sources);
    }

    /**
     * Get source for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $sourceId
     * @return SourceEntity
     */
    public function getById($appId, $scanId, $sourceId)
    {
        $source = $this->api
            ->applications()
            ->scans()
            ->sources()
            ->getById($appId, $scanId, $sourceId);

        return SourceHydrator::hydrate($source);
    }
}
