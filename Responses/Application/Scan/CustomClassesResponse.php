<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomClassEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;

class CustomClassesResponse extends BaseResponse
{
    /** @var CustomClassEntity[] */
    private $customClasses;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->customClasses = CustomClassHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return CustomClassEntity[]
     */
    public function getCustomClasses()
    {
        return $this->customClasses;
    }
}
