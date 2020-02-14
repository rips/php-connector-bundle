<?php

namespace RIPS\ConnectorBundle\Hydrators\Notification;

use RIPS\ConnectorBundle\Entities\Notification\SubscriptionEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class SubscriptionHydrator
{
    /**
     * Hydrate a collection of notification subscription objects into a collection of
     * SubscriptionEntity objects
     *
     * @param \stdClass[] $subscriptions
     * @return SubscriptionEntity[]
     */
    public static function hydrateCollection(array $subscriptions)
    {
        $hydrated = [];

        foreach ($subscriptions as $subscription) {
            $hydrated[] = self::hydrate($subscription);
        }

        return $hydrated;
    }

    /**
     * Hydrate a notification subscription object into a SubscriptionEntity object
     *
     * @param \stdClass $subscription
     * @return SubscriptionEntity
     */
    public static function hydrate(\stdClass $subscription)
    {
        $hydrated = new SubscriptionEntity();

        if (isset($subscription->id)) {
            $hydrated->setId($subscription->id);
        }

        if (isset($subscription->event_type)) {
            $hydrated->setEventType($subscription->event_type);
        }

        if (isset($subscription->user)) {
            $hydrated->setUser(UserHydrator::hydrate($subscription->user));
        }

        if (isset($subscription->summary_interval)) {
            $hydrated->setSummaryInterval($subscription->summary_interval);
        }

        if (isset($subscription->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($subscription->scan));
        }

        if (isset($subscription->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($subscription->application));
        }

        if (isset($subscription->created_at)) {
            $hydrated->setCreatedAt(new \DateTime($subscription->created_at));
        }

        if (isset($subscription->by_mail)) {
            $hydrated->setByMail($subscription->by_mail);
        }

        if (isset($subscription->by_user_interface)) {
            $hydrated->setByUserInterface($subscription->by_user_interface);
        }

        return $hydrated;
    }
}
