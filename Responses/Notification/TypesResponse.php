<?php

namespace RIPS\ConnectorBundle\Responses\Notification;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Notification\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Notification\TypeHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class TypesResponse extends BaseResponse
{
    /** @var TypeEntity[] */
    private $types;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->types = TypeHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return TypeEntity[]
     */
    public function getTypes()
    {
        return $this->types;
    }
}
