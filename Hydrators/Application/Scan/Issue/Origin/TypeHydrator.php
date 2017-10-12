<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Origin;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Origin\TypeEntity;

class TypeHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * OriginEntity objects
     *
     * @param stdClass[] $origins
     * @return TypeEntity[]
     */
    public static function hydrateCollection(array $origins)
    {
        $hydrated = [];

        foreach ($origins as $origin) {
            $hydrated[] = self::hydrate($origin);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a OriginEntity object
     *
     * @param stdClass $origin
     * @return TypeEntity
     */
    public static function hydrate(stdClass $origin)
    {
        $hydrated = new TypeEntity();

        if (isset($origin->id)) {
            $hydrated->setId($origin->id);
        }

        if (isset($origin->tag)) {
            $hydrated->setTag($origin->tag);
        }

        if (isset($origin->name)) {
            $hydrated->setName($origin->name);
        }
        return $hydrated;
    }
}
