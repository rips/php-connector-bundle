<?php

namespace RIPS\ConnectorBundle\Hydrators\User;

use RIPS\ConnectorBundle\Entities\User\StatisticsEntity;
use RIPS\ConnectorBundle\Hydrators\User\Statistics\ReviewTagHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class StatisticsHydrator
{
    /**
     * Hydrate a collection of statistics objects into a collection of
     * StatisticsEntity objects
     *
     * @param \stdClass[] $statistics
     * @return StatisticsEntity[]
     */
    public static function hydrateCollection(array $statistics)
    {
        $hydrated = [];

        foreach ($statistics as $statistic) {
            $hydrated[] = self::hydrate($statistic);
        }

        return $hydrated;
    }

    /**
     * Hydrate a statistics object into a StatisticsEntity object
     *
     * @param \stdClass $statistic
     * @return StatisticsEntity
     */
    public static function hydrate(\stdClass $statistic)
    {
        $hydrated = new StatisticsEntity();

        if (isset($statistic->user)) {
            $hydrated->setUser(UserHydrator::hydrate($statistic->user));
        }

        if (isset($statistic->scans)) {
            $hydrated->setScans($statistic->scans);
        }

        if (isset($statistic->reviews)) {
            $hydrated->setReviews($statistic->reviews);
        }

        if (isset($statistic->comments)) {
            $hydrated->setComments($statistic->comments);
        }

        if (isset($statistic->reviews_tags)) {
            $hydrated->setReviewsTags(ReviewTagHydrator::hydrateCollection($statistic->reviews_tags));
        }

        return $hydrated;
    }
}
