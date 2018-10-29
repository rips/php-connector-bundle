<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Type;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type\ResourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Type\ResourceHydrator;

class ResourceResponse extends BaseResponse
{
    /** @var ResourceEntity */
    private $resource;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->resource = ResourceHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ResourceEntity
     */
    public function getResource()
    {
        return $this->resource;
    }
}
