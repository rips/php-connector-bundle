<?php

namespace RIPS\ConnectorBundle\Responses\Notification;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Notification\SubscriptionEntity;
use RIPS\ConnectorBundle\Hydrators\Notification\SubscriptionHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class SubscriptionResponse extends BaseResponse
{
    /** @var SubscriptionEntity */
    private $subscription;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->subscription = SubscriptionHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SubscriptionEntity
     */
    public function getSubscription()
    {
        return $this->subscription;
    }
}
