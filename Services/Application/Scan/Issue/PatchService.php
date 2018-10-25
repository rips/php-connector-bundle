<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue;

use RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue\PatchBuilder;
use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\PatchHydrator;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\PatchEntity;

class PatchService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new PatchService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all patches for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param array $queryParams
     * @return PatchEntity[]
     */
    public function getAll($appId, $scanId, $issueId, array $queryParams = [])
    {
        $patches = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->patches()
            ->getAll($appId, $scanId, $issueId, $queryParams);

        return PatchHydrator::hydrateCollection($patches);
    }

    /**
     * Get patch for an issue by id
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param int $patchId
     * @param array $queryParams
     * @return PatchEntity
     */
    public function getById($appId, $scanId, $issueId, $patchId, array $queryParams = [])
    {
        $summary = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->patches()
            ->getById($appId, $scanId, $issueId, $patchId, $queryParams);

        return PatchHydrator::hydrate($summary);
    }

    /**
     * Create a patch for an issue
     *
     * @param int $appId
     * @param int $scanId
     * @param int $issueId
     * @param PatchBuilder|BaseBuilder[string] $input
     * @param array $queryParams
     * @return PatchEntity
     */
    public function create($appId, $scanId, $issueId, $input, array $queryParams = [])
    {
        if ($input instanceof PatchBuilder) {
            $inputArray = $input->toArray();
            $defaultInput = true;
        } else {
            $inputArray = [];
            foreach ($input as $key => $value) {
                if ($value instanceof BaseBuilder) {
                    $inputArray[$key] = $value->toArray();
                } else if (is_array($value)) {
                    foreach ($value as $key2 => $value2) {
                        if ($value2 instanceof BaseBuilder) {
                            $inputArray[$key][$key2] = $value2->toArray();
                        } else if (is_string($value2)) {
                            $inputArray[$key][$key2] = $value2;
                        }
                    }
                }
            }
            $defaultInput = false;
        }

        $patch = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->patches()
            ->create($appId, $scanId, $issueId, $inputArray, $queryParams, $defaultInput);

        return PatchHydrator::hydrate($patch);
    }
}
