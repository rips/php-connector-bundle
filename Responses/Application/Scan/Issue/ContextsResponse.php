<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ContextEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ContextHydrator;

class ContextsResponse extends BaseResponse
{
    /** @var ContextEntity[] */
    private $contexts;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->contexts = ContextHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ContextEntity[]
     */
    public function getContexts()
    {
        return $this->contexts;
    }
}
