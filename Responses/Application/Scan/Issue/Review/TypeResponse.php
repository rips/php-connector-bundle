<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Review;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Review\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Review\TypeHydrator;

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
