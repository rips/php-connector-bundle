<?php

namespace RIPS\ConnectorBundle\Services\Notification;

use RIPS\ConnectorBundle\Responses\Notification\TypesResponse;
use RIPS\ConnectorBundle\Services\APIService;

class TypeService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ScanService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all Types
     *
     * @param array $queryParams
     * @return TypesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->notifications()->types()->getAll($queryParams);

        return new TypesResponse($response);
    }
}
