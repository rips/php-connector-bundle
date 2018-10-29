<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\Scan\EntrypointEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\EntrypointHydrator;

class EntrypointService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new EntrypointService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all entrypoints for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return EntrypointEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $entrypoint = $this->api
            ->applications()
            ->scans()
            ->entrypoints()
            ->getAll($appId, $scanId, $queryParams);

        return EntrypointHydrator::hydrateCollection($entrypoint->getDecodedData());
    }

    /**
     * Get entrypoint for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $entrypointId
     * @param array $queryParams
     * @return EntrypointEntity
     */
    public function getById($appId, $scanId, $entrypointId, array $queryParams = [])
    {
        $entrypoint = $this->api
            ->applications()
            ->scans()
            ->entrypoints()
            ->getById($appId, $scanId, $entrypointId, $queryParams);

        return EntrypointHydrator::hydrate($entrypoint->getDecodedData());
    }
}
