<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\LogEntity;
use RIPS\ConnectorBundle\Hydrators\LogHydrator;

class LogResponse extends BaseResponse
{
    /** @var LogEntity */
    private $log;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->log = LogHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return LogEntity
     */
    public function getLog()
    {
        return $this->log;
    }
}
