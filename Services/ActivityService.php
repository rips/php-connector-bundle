<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Responses\ActivitiesResponse;
use RIPS\ConnectorBundle\Responses\ActivityResponse;

class ActivityService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new APIService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all activities
     *
     * @param array $queryParams
     * @return ActivitiesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->activities()->getAll($queryParams);

        return new ActivitiesResponse($response);
    }

    /**
     * Get activity by id
     *
     * @param int $activityId
     * @param array $queryParams
     * @return ActivityResponse
     */
    public function getById($activityId, array $queryParams = [])
    {
        $response = $this->api->activities()->getById($activityId, $queryParams);

        return new ActivityResponse($response);
    }
}
