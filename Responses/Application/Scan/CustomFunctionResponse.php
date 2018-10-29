<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomFunctionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;

class CustomFunctionResponse extends BaseResponse
{
    /** @var CustomFunctionEntity */
    private $customFunction;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->customFunction = CustomFunctionHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return CustomFunctionEntity
     */
    public function getCustomFunction()
    {
        return $this->customFunction;
    }
}
