<?php

namespace RIPS\ConnectorBundle\Services\Notification;

use RIPS\ConnectorBundle\InputBuilders\Notification\SubscriptionBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\Notification\SubscriptionResponse;
use RIPS\ConnectorBundle\Responses\Notification\SubscriptionsResponse;
use RIPS\ConnectorBundle\Services\APIService;

class SubscriptionService
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
     * Get all Subscriptions
     *
     * @param array $queryParams
     * @return SubscriptionsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->notifications()->subscriptions()->getAll($queryParams);

        return new SubscriptionsResponse($response);
    }

    /**
     * Get Scan by ID
     *
     * @param int $subscriptionId
     * @param array $queryParams
     * @return SubscriptionResponse
     */
    public function getById($subscriptionId, array $queryParams = [])
    {
        $response = $this->api->notifications()->subscriptions()->getById($subscriptionId, $queryParams);

        return new SubscriptionResponse($response);
    }

    /**
     * Create a new subscription
     *
     * @param SubscriptionBuilder $input
     * @param array $queryParams
     * @return SubscriptionResponse
     */
    public function create(SubscriptionBuilder $input, array $queryParams = [])
    {
        $response = $this->api->notifications()->subscriptions()->create($input->toArray(), $queryParams);

        return new SubscriptionResponse($response);
    }

    /**
     * Update an existing subscription
     *
     * @param int $subscriptionId
     * @param SubscriptionBuilder $input
     * @param array $queryParams
     * @return SubscriptionResponse
     */
    public function update($subscriptionId, SubscriptionBuilder $input, array $queryParams = [])
    {
        $response = $this->api->notifications()->subscriptions()->update($subscriptionId, $input->toArray(), $queryParams);

        return new SubscriptionResponse($response);
    }

    /**
     * Delete subscription by id
     *
     * @param int $subscriptionId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($subscriptionId, array $queryParams = [])
    {
        $response = $this->api->notifications()->subscriptions()->deleteById($subscriptionId, $queryParams);

        return new BaseResponse($response);
    }
}
