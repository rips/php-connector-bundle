<?php

namespace RIPS\ConnectorBundle\Hydrators\User\Statistics;

use RIPS\ConnectorBundle\Entities\User\Statistics\ReviewTagEntity;

class ReviewTagHydrator
{
    /**
     * Hydrate a collection of reviews tag objects into a collection of
     * ReviewTagEntity objects
     *
     * @param \stdClass[] $reviewsTags
     * @return ReviewTagEntity[]
     */
    public static function hydrateCollection(array $reviewsTags)
    {
        $hydrated = [];

        foreach ($reviewsTags as $reviewTag) {
            $hydrated[] = self::hydrate($reviewTag);
        }

        return $hydrated;
    }

    /**
     * Hydrate a reviews tag object into a ReviewTagEntity object
     *
     * @param \stdClass $reviewTag
     * @return ReviewTagEntity
     */
    public static function hydrate(\stdClass $reviewTag)
    {
        $hydrated = new ReviewTagEntity();

        if (isset($reviewTag->tag)) {
            $hydrated->setTag($reviewTag->tag);
        }

        if (isset($reviewTag->reviews)) {
            $hydrated->setReviews($reviewTag->reviews);
        }

        return $hydrated;
    }
}
