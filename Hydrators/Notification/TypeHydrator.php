<?php

namespace RIPS\ConnectorBundle\Hydrators\Notification;

use RIPS\ConnectorBundle\Entities\Notification\TypeEntity;

class TypeHydrator
{
    /**
     * Hydrate a collection of notification type objects into a collection of
     * TypeEntity objects
     *
     * @param stdClass[] $types
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
     * Hydrate a notification type object into a TypeEntity object
     *
     * @param \stdClass $type
     * @return TypeEntity
     */
    public static function hydrate(\stdClass $type)
    {
        $hydrated = new TypeEntity();

        if (isset($type->id)) {
            $hydrated->setId($type->id);
        }

        if (isset($type->description)) {
            $hydrated->setDescription($type->description);
        }

        return $hydrated;
    }
}
