<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomFunctionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;

class CustomFunctionsResponse extends BaseResponse
{
    /** @var CustomFunctionEntity[] */
    private $customFunctions;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->customFunctions = CustomFunctionHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return CustomFunctionEntity[]
     */
    public function getCustomFunctions()
    {
        return $this->customFunctions;
    }
}
