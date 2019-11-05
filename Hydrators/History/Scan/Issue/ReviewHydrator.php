<?php

namespace RIPS\ConnectorBundle\Hydrators\History\Scan\Issue;

use RIPS\ConnectorBundle\Entities\History\Scan\Issue\ReviewEntity;

class ReviewHydrator
{
    /**
     * Hydrate a collection of review objects into a collection of
     * ReviewEntity objects
     *
     * @param \stdClass[] $reviews
     * @return ReviewEntity[]
     */
    public static function hydrateCollection(array $reviews)
    {
        $hydrated = [];

        foreach ($reviews as $review) {
            $hydrated[] = self::hydrate($review);
        }

        return $hydrated;
    }

    /**
     * Hydrate a history scan issue review object into a ReviewEntity object
     *
     * @param \stdClass $review
     * @return ReviewEntity
     */
    public static function hydrate(\stdClass $review)
    {
        $hydrated = new ReviewEntity();

        if (isset($review->quantity)) {
            $hydrated->setQuantity($review->quantity);
        }

        if (isset($review->tag)) {
            $hydrated->setTag($review->tag);
        }

        return $hydrated;
    }
}
