<?php

namespace RIPS\ConnectorBundle\Responses\Notification;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Notification\SubscriptionEntity;
use RIPS\ConnectorBundle\Hydrators\Notification\SubscriptionHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class SubscriptionsResponse extends BaseResponse
{
    /** @var SubscriptionEntity[] */
    private $subscriptions;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->subscriptions = SubscriptionHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SubscriptionEntity[]
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }
}
