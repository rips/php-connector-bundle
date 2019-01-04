<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\ControllerEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\ControllerHydrator;

class ControllerResponse extends BaseResponse
{
    /** @var ControllerEntity */
    private $controller;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->controller = ControllerHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ControllerEntity
     */
    public function getController()
    {
        return $this->controller;
    }
}
