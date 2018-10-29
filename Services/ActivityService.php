<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\ActivityHydrator;
use RIPS\ConnectorBundle\Entities\ActivityEntity;

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
     * @return ActivityEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $activities = $this->api->activities()->getAll($queryParams);

        return ActivityHydrator::hydrateCollection($activities->getDecodedData());
    }

    /**
     * Get activity by id
     *
     * @param int $activityId
     * @param array $queryParams
     * @return ActivityEntity
     */
    public function getById($activityId, array $queryParams = [])
    {
        $activity = $this->api->activities()->getById($activityId, $queryParams);

        return ActivityHydrator::hydrate($activity->getDecodedData());
    }
}
