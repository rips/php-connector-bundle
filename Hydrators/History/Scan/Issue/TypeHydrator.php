<?php

namespace RIPS\ConnectorBundle\Hydrators\History\Scan\Issue;

use RIPS\ConnectorBundle\Entities\History\Scan\Issue\TypeEntity;

class TypeHydrator
{
    /**
     * Hydrate a collection of type objects into a collection of
     * TypeEntity objects
     *
     * @param \stdClass[] $types
     * @return TypeEntity[]
     */
    public static function hydrateCollection(array $types)
    {
        $hydrated = [];

        foreach ($types as $type) {
            $hydrated[] = self::hydrate($type);
        }

        return $hydrated;
    }

    /**
     * Hydrate a history scan issue type object into a TypeEntity object
     *
     * @param \stdClass $type
     * @return TypeEntity
     */
    public static function hydrate(\stdClass $type)
    {
        $hydrated = new TypeEntity();

        if (isset($type->quantity)) {
            $hydrated->setQuantity($type->quantity);
        }

        if (isset($type->tag)) {
            $hydrated->setTag($type->tag);
        }

        if (isset($type->reviews)) {
            $hydrated->setReviews(ReviewHydrator::hydrateCollection($type->reviews));
        }

        return $hydrated;
    }
}
