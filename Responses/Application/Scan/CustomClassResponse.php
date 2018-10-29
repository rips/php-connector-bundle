<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomClassEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;

class CustomClassResponse extends BaseResponse
{
    /** @var CustomClassEntity */
    private $customClass;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->customClass = CustomClassHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return CustomClassEntity
     */
    public function getCustomClass()
    {
        return $this->customClass;
    }
}
