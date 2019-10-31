<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\ServerEntity;
use RIPS\ConnectorBundle\Hydrators\ServerHydrator;

class ServersResponse extends BaseResponse
{
    /** @var ServerEntity[] */
    private $servers;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->servers = ServerHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ServerEntity[]
     */
    public function getServers()
    {
        return $this->servers;
    }
}
