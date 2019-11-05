<?php

namespace RIPS\ConnectorBundle\Responses\Notification;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Notification\MessageEntity;
use RIPS\ConnectorBundle\Hydrators\Notification\MessageHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class MessagesResponse extends BaseResponse
{
    /** @var MessageEntity[] */
    private $messages;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->messages = MessageHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return MessageEntity[]
     */
    public function getMessages()
    {
        return $this->messages;
    }
}
