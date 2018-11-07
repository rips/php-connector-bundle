<?php

namespace RIPS\ConnectorBundle\Services\Application\Scan\Issue\Type;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Type\PatchesResponse;
use RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Type\PatchResponse;

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
     * Get all patches for issue types
     *
     * @param array $queryParams
     * @return PatchesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->types()
            ->patches()
            ->getAll($queryParams);

        return new PatchesResponse($response);
    }

    /**
     * Get patch for issue types by id
     *
     * @param int $patchId
     * @param array $queryParams
     * @return PatchResponse
     */
    public function getById($patchId, array $queryParams = [])
    {
        $response = $this->api
            ->applications()
            ->scans()
            ->issues()
            ->types()
            ->patches()
            ->getById($patchId, $queryParams);

        return new PatchResponse($response);
    }
}
