<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\ActivityEntity;
use RIPS\ConnectorBundle\Hydrators\ActivityHydrator;

class ActivityResponse extends BaseResponse
{
    /** @var ActivityEntity */
    private $activity;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->activity = ActivityHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ActivityEntity
     */
    public function getActivity()
    {
        return $this->activity;
    }
}
