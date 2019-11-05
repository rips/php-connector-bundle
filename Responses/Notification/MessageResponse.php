<?php

namespace RIPS\ConnectorBundle\Responses\Notification;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Notification\MessageEntity;
use RIPS\ConnectorBundle\Hydrators\Notification\MessageHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class MessageResponse extends BaseResponse
{
    /** @var MessageEntity */
    private $message;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->message = MessageHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return MessageEntity
     */
    public function getMessage()
    {
        return $this->message;
    }
}
