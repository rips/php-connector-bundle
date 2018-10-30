<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Review;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Review\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Review\TypeHydrator;

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
