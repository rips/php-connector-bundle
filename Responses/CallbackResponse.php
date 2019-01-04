<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\CallbackEntity;
use RIPS\ConnectorBundle\Hydrators\CallbackHydrator;

class CallbackResponse extends BaseResponse
{
    /** @var CallbackEntity */
    private $callback;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->callback = CallbackHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return CallbackEntity
     */
    public function getCallback()
    {
        return $this->callback;
    }
}
