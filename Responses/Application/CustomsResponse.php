<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\CustomEntity;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;

class CustomsResponse extends BaseResponse
{
    /** @var CustomEntity[] */
    private $customs;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->customs = CustomHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return CustomEntity[]
     */
    public function getCustoms()
    {
        return $this->customs;
    }
}
