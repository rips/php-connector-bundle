<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\ActivityHydrator;
use RIPS\ConnectorBundle\Entities\ActivityEntity;
use RIPS\Connector\Entities\Response as OriginalResponse;

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
     * @param OriginalResponse|null &$originalResponse
     * @return ActivityEntity[]
     */
    public function getAll(array $queryParams = [], OriginalResponse &$originalResponse = null)
    {
        $response = $this->api->activities()->getAll($queryParams);

        if ($originalResponse) {
            $originalResponse = $response;
        }

        return ActivityHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * Get activity by id
     *
     * @param int $activityId
     * @param array $queryParams
     * @param OriginalResponse|null &$originalResponse
     * @return ActivityEntity
     */
    public function getById($activityId, array $queryParams = [], OriginalResponse &$originalResponse = null)
    {
        $response = $this->api->activities()->getById($activityId, $queryParams);

        if ($originalResponse) {
            $originalResponse = $response;
        }

        return ActivityHydrator::hydrate($response->getDecodedData());
    }
}
