<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Source;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Source\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Source\TypeHydrator;

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
