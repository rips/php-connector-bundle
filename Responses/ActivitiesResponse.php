<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\ActivityEntity;
use RIPS\ConnectorBundle\Hydrators\ActivityHydrator;

class ActivitiesResponse extends BaseResponse
{
    /** @var ActivityEntity[] */
    private $activities;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->activities = ActivityHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ActivityEntity[]
     */
    public function getActivities()
    {
        return $this->activities;
    }
}
