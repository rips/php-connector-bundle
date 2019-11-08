<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\ServerEntity;
use RIPS\ConnectorBundle\Hydrators\ServerHydrator;

class ServerResponse extends BaseResponse
{
    /** @var ServerEntity */
    private $server;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->server = ServerHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ServerEntity
     */
    public function getServer()
    {
        return $this->server;
    }
}
