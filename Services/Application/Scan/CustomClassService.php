<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomClassEntity;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\CustomClassBuilder;

class CustomClassService
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
     * Get all custom classes for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return CustomClassEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $classes = $this->api
            ->applications()
            ->scans()
            ->classes()
            ->getAll($appId, $scanId, $queryParams);

        return CustomClassHydrator::hydrateCollection($classes);
    }

    /**
     * Get custom class for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $classId
     * @param array $queryParams
     * @return CustomClassEntity
     */
    public function getById($appId, $scanId, $classId, array $queryParams = [])
    {
        $class = $this->api
            ->applications()
            ->scans()
            ->classes()
            ->getById($appId, $scanId, $classId, $queryParams);

        return CustomClassHydrator::hydrate($class);
    }

    /**
     * Create custom class for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param CustomClassBuilder $input
     * @param array $queryParams
     * @return CustomClassEntity
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $class = $this->api
            ->applications()
            ->scans()
            ->classes()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return CustomClassHydrator::hydrate($class);
    }
}
