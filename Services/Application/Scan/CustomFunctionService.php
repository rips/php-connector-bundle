<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan;

use RIPS\ConnectorBundle\Services\APIService;

use RIPS\ConnectorBundle\Entities\Application\Scan\CustomFunctionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Scan\CustomFunctionBuilder;

class CustomFunctionService
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
     * Get all custom functions for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param array $queryParams
     * @return CustomFunctionEntity[]
     */
    public function getAll($appId, $scanId, array $queryParams = [])
    {
        $functions = $this->api
            ->applications()
            ->scans()
            ->functions()
            ->getAll($appId, $scanId, $queryParams);

        return CustomFunctionHydrator::hydrateCollection($functions);
    }

    /**
     * Get custom function for scan by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $functionId
     * @param array $queryParams
     * @return CustomFunctionEntity
     */
    public function getById($appId, $scanId, $functionId, array $queryParams = [])
    {
        $function = $this->api
            ->applications()
            ->scans()
            ->functions()
            ->getById($appId, $scanId, $functionId, $queryParams);

        return CustomFunctionHydrator::hydrate($function);
    }

    /**
     * Create custom function for a scan
     *
     * @param int $appId
     * @param int $scanId
     * @param CustomFunctionBuilder $input
     * @param array $queryParams
     * @return CustomFunctionEntity
     */
    public function create($appId, $scanId, $input, array $queryParams = [])
    {
        $function = $this->api
            ->applications()
            ->scans()
            ->functions()
            ->create($appId, $scanId, $input->toArray(), $queryParams);

        return CustomFunctionHydrator::hydrate($function);
    }
}
