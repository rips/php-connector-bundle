<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Property;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Property\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Property\TypeHydrator;

class TypeResponse extends BaseResponse
{
    /** @var TypeEntity */
    private $type;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->type = TypeHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }
}
