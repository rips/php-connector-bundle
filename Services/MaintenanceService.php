<?php

namespace RIPS\ConnectorBundle\Services;

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
     * @return void
     */
    public function deleteCode(array $queryParams = [])
    {
        $this->api->maintenance()->deleteCode($queryParams);
    }
}
