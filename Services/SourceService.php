<?php

namespace RIPS\ConnectorBundle\Services;

class SourceService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new TeamService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all directories from the root source directory
     *
     * @param array $queryParams
     * @return string
     */
    public function getAll(array $queryParams = [])
    {
        return $this->api->sources()->getAll($queryParams);
    }
}
