<?php

namespace RIPS\ConnectorBundle\Services\System;

use RIPS\ConnectorBundle\Responses\System\HealthResponse;
use RIPS\ConnectorBundle\Services\APIService;

class HealthService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new HealthService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get health status
     *
     * @return HealthResponse
     */
    public function get()
    {
        $response = $this->api->systems()->health()->get();

        return new HealthResponse($response);
    }
}
