<?php

namespace RIPS\ConnectorBundle\Services\User;

use RIPS\ConnectorBundle\Responses\User\StatisticResponse;
use RIPS\ConnectorBundle\Responses\User\StatisticsResponse;
use RIPS\ConnectorBundle\Services\APIService;

class StatisticsService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new APIService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all users statistics
     *
     * @param array $queryParams
     * @return StatisticsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->users()->getAllStatistics($queryParams);

        return new StatisticsResponse($response);
    }

    /**
     * Get user statistics by id
     *
     * @param int $userId
     * @param array $queryParams
     * @return StatisticResponse
     */
    public function getById($userId, array $queryParams = [])
    {
        $response = $this->api->users()->getStatistics($userId, $queryParams);

        return new StatisticResponse($response);
    }
}
