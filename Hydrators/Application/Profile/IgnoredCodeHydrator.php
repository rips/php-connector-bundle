<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoredCodeEntity;

class IgnoredCodeHydrator
{
    /**
     * Hydrate a collection of ignore objects into a collection of
     * IgnoredCodeEntity objects
     *
     * @param stdClass[] $ignores
     * @return IgnoredCodeEntity[]
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
     * Hydrate a ignore object into a IgnoredCodeEntity object
     *
     * @param stdClass $ignore
     * @return IgnoredCodeEntity
     */
    public static function hydrate(stdClass $ignore)
    {
        $hydrated = new IgnoredCodeEntity();

        if (isset($ignore->id)) {
            $hydrated->setId($ignore->id);
        }

        if (isset($ignore->class)) {
            $hydrated->setClass($ignore->class);
        }

        if (isset($ignore->method)) {
            $hydrated->setMethod($ignore->method);
        }

        if (isset($ignore->exclude)) {
            $hydrated->setExclude($ignore->exclude);
        }

        return $hydrated;
    }
}
