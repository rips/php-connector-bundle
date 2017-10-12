<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Review;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Review\TypeEntity;

class TypeHydrator
{
    /**
     * Hydrate a collection of type objects into a collection of
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
     * Hydrate a type object into a TypeEntity object
     *
     * @param stdClass $type
     * @return TypeEntity
     */
    public static function hydrate(stdClass $type)
    {
        $hydrated = new TypeEntity();

        if (isset($type->id)) {
            $hydrated->setId($type->id);
        }

        if (isset($type->tag)) {
            $hydrated->setTag($type->tag);
        }

        if (isset($type->name)) {
            $hydrated->setName($type->name);
        }

        if (isset($type->negative)) {
            $hydrated->setNegative($type->negative);
        }

        return $hydrated;
    }
}
