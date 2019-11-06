<?php

namespace RIPS\ConnectorBundle\Services\Notification;

use RIPS\ConnectorBundle\InputBuilders\Notification\SubscriptionBuilder;
use RIPS\ConnectorBundle\Responses\Notification\MessageResponse;
use RIPS\ConnectorBundle\Responses\Notification\MessagesResponse;
use RIPS\ConnectorBundle\Responses\Notification\SubscriptionResponse;
use RIPS\ConnectorBundle\Services\APIService;

class MessageService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ScanService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all Messages
     *
     * @param array $queryParams
     * @return MessagesResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->notifications()->messages()->getAll($queryParams);

        return new MessagesResponse($response);
    }

    /**
     * Mark message as read
     *
     * @param int $messageID
     * @param array $queryParams
     * @return MessageResponse
     */
    public function markAsRead($messageID, array $queryParams = [])
    {
        $response = $this->api->notifications()->messages()->markAsRead($messageID, $queryParams);

        return new MessageResponse($response);
    }
}
