<?php

namespace RIPS\ConnectorBundle\Responses\OAuth2;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\OAuth2\ClientEntity;
use RIPS\ConnectorBundle\Hydrators\OAuth2\ClientHydrator;

class ClientResponse extends BaseResponse
{
    /** @var ClientEntity */
    private $client;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->client = ClientHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ClientEntity
     */
    public function getClient()
    {
        return $this->client;
    }
}
