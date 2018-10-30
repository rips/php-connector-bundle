<?php

namespace RIPS\ConnectorBundle\Responses\OAuth2;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\OAuth2\ClientEntity;
use RIPS\ConnectorBundle\Hydrators\OAuth2\ClientHydrator;

class ClientsResponse extends BaseResponse
{
    /** @var ClientEntity[] */
    private $clients;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->clients = ClientHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ClientEntity[]
     */
    public function getClients()
    {
        return $this->clients;
    }
}
