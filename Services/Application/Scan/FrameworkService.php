<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\FrameworkEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FrameworkHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\FrameworkBuilder;
use RIPS\ConnectorBundle\Services\APIService;

class FrameworkService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new OrgService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all frameworks for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return FrameworkEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $frameworks = $this->api
            ->applications()
            ->scans()
            ->frameworks()
            ->getAll($appId, $scanId, $queryParams);

        return FrameworkHydrator::hydrateCollection($frameworks);
    }

    /**
     * Get framework for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $frameworkId
     * @param array $queryParams
     * @return FrameworkEntity
     */
    public function getById($appId, $scanId, $frameworkId, array $queryParams = [])
    {
        $framework = $this->api
            ->applications()
            ->scans()
            ->frameworks()
            ->getById($appId, $scanId, $frameworkId, $queryParams);

        return FrameworkHydrator::hydrate($framework);
    }

    /**
     * Create a framework for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param FrameworkBuilder $input
     * @param array $queryParams
     * @return FrameworkEntity
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $framework = $this->api
            ->applications()
            ->scans()
            ->frameworks()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return FrameworkHydrator::hydrate($framework);
    }

    /**
     * Update a framework for a service
     *
     * @param int $appId
     * @param int $scanId
     * @param int $frameworkId
     * @param FrameworkBuilder $input
     * @param array $queryParams
     * @return FrameworkEntity
     */
    public function update($appId, $scanId, $frameworkId, $input, array $queryParams = [])
    {
        $framework = $this->api
            ->applications()
            ->scans()
            ->frameworks()
            ->update($appId, $scanId, $frameworkId, $input->toArray(), $queryParams);

        return FrameworkHydrator::hydrate($framework);
    }

    /**
     * Delete all frameworks
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $scanId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->frameworks()
            ->deleteAll($appId, $scanId, $queryParams);
    }

    /**
     * Delete a framework by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $frameworkId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $scanId, $frameworkId, array $queryParams = [])
    {
        $this->api
            ->applications()
            ->scans()
            ->frameworks()
            ->deleteById($appId, $scanId, $frameworkId, $queryParams);
    }
}
