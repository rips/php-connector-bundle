<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\CallbackEntity;
use RIPS\ConnectorBundle\Hydrators\CallbackHydrator;

class CallbacksResponse extends BaseResponse
{
    /** @var CallbackEntity[] */
    private $callbacks;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->callbacks = CallbackHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return CallbackEntity[]
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
}
