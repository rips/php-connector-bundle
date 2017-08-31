<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ReviewEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Review\TypeHydrator;

class ReviewHydrator
{
    /**
     * Hydrate a collection of review objects into a collection of
     * ReviewEntity objects
     *
     * @param stdClass[] $review
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
     * Hydrate a review object into a ReviewEntity object
     *
     * @param stdClass $review
     * @return ReviewEntity
     */
    public static function hydrate(\stdClass $review)
    {
        $hydrated = new ReviewEntity();

        if (isset($review->id)) {
            $hydrated->setId($review->id);
        }

        if (isset($review->submission)) {
            $hydrated->setSubmission(new DateTime($review->submission));
        }

        if (isset($review->type)) {
            $hydrated->setType(TypeHydrator::hydrate($review->type));
        }

        if (isset($review->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($review->created_by));
        }

        if (isset($review->issue)) {
            $hydrated->setIssue(IssueHydrator::hydrate($review->issue));
        }

        return $hydrated;
    }
}
