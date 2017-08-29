<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\OriginEntity;

class OriginHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * OriginEntity objects
     *
     * @param  array<stdClass> $origin
     * @return array<OriginEntity>
     */
    public static function hydrateCollection(array $origin)
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
     * @param  \stdClass $origin
     * @return OriginEntity
     */
    public static function hydrate(\stdClass $origin)
    {
        $hydrated = new OriginEntity();

        if (isset($origin->id)) {
            $hydrated->setId($origin->id);
        }

        if (isset($origin->tag)) {
            $hydrated->setTag($origin->tag);
        }

        if (isset($origin->name)) {
            $hydrated->setName($origin->name);
        }
    }
}
