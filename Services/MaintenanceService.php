<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Responses\BaseResponse;

class MaintenanceService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new MaintenanceService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Delete logs older than a week
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteCode(array $queryParams = [])
    {
        $response = $this->api->maintenance()->deleteCode($queryParams);

        return new BaseResponse($response);
    }
}
