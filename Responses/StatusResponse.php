<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\StatusEntity;
use RIPS\ConnectorBundle\Hydrators\StatusHydrator;

class StatusResponse extends BaseResponse
{
    /** @var StatusEntity */
    private $status;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->status = StatusHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return StatusEntity
     */
    public function getStatus()
    {
        return $this->status;
    }
}
