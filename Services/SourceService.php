<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Responses\SourcesResponse;

class SourceService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new TeamService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all directories from the root source directory
     *
     * @param array $queryParams
     * @return SourcesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->sources()->getAll($queryParams);

        return new SourcesResponse($response);
    }
}
