<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ContextEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ContextHydrator;

class ContextResponse extends BaseResponse
{
    /** @var ContextEntity */
    private $context;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->context = ContextHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ContextEntity
     */
    public function getContext()
    {
        return $this->context;
    }
}
