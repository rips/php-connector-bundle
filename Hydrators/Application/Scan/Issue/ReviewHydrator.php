<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ReviewEntity;

class ReviewHydrator
{
    /**
     * Hydrate a collection of review objects into a collection of
     * ReviewEntity objects
     *
     * @param  array<\stdClass> $reviews
     * @return array<ReviewEntity>
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
     * Hydrate a review object into a ReviewEntity object
     *
     * @param   \stdClass $review
     * @return  ReviewEntityEntity
     */
    public static function hydrate(\stdClass $review)
    {
        $hydrated = new ReviewEntity();

        if (isset($review->review)) {
            $hydrated->setReview($review->review);
        }
    }
}
