<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\ControllerEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ControllerHydrator;

class ControllersResponse extends BaseResponse
{
    /** @var ControllerEntity[] */
    private $controllers;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->controllers = ControllerHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ControllerEntity[]
     */
    public function getController()
    {
        return $this->controllers;
    }
}
