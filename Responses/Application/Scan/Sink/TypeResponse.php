<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Sink;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Sink\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Sink\TypeHydrator;

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
