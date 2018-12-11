<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoredLocationEntity;

class IgnoredLocationHydrator
{
    /**
     * Hydrate a collection of ignore objects into a collection of
     * IgnoredLocationEntity objects
     *
     * @param stdClass[] $ignores
     * @return IgnoredLocationEntity[]
     */
    public static function hydrateCollection(array $ignores)
    {
        $hydrated = [];

        foreach ($ignores as $ignore) {
            $hydrated[] = self::hydrate($ignore);
        }

        return $hydrated;
    }

    /**
     * Hydrate a ignore object into a IgnoredLocationEntity object
     *
     * @param stdClass $ignore
     * @return IgnoredLocationEntity
     */
    public static function hydrate(stdClass $ignore)
    {
        $hydrated = new IgnoredLocationEntity();

        if (isset($ignore->id)) {
            $hydrated->setId($ignore->id);
        }

        if (isset($ignore->path)) {
            $hydrated->setPath($ignore->path);
        }

        if (isset($ignore->match)) {
            $hydrated->setMatch($ignore->match);
        }

        if (isset($ignore->exclude)) {
            $hydrated->setExclude($ignore->exclude);
        }

        return $hydrated;
    }
}
