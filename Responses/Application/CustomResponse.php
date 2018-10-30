<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\CustomEntity;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;

class CustomResponse extends BaseResponse
{
    /** @var CustomEntity */
    private $custom;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->custom = CustomHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return CustomEntity
     */
    public function getCustom()
    {
        return $this->custom;
    }
}
