<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use Psr\Http\Message\ResponseInterface;

class BaseResponse
{
    /** @var ResponseInterface */
    private $response;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        $this->response = $response->getResponse();
    }

    /**
     * @return ResponseInterface
     */
    public function getResponse()
    {
        return $this->response;
    }
}
