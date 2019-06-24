<?php

namespace RIPS\ConnectorBundle\Responses\System;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\System\HealthEntity;
use RIPS\ConnectorBundle\Hydrators\System\HealthHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class HealthResponse extends BaseResponse
{
    /**
     * @var HealthEntity
     */
    protected $health;
    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->health = HealthHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return HealthEntity
     */
    public function getHealth()
    {
        return $this->health;
    }
}
