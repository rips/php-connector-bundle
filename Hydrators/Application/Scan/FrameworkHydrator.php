<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\FrameworkEntity;

class FrameworkHydrator
{
    /**
     * Hydrate a collection of framework objects into a collection of
     * FrameworkEntity objects
     *
     * @param stdClass[] $frameworks
     * @return FrameworkEntity[]
     */
    public static function hydrateCollection(array $frameworks)
    {
        $hydrated = [];

        foreach ($frameworks as $framework) {
            $hydrated[] = self::hydrate($framework);
        }

        return $hydrated;
    }

    /**
     * Hydrate a framework object into a FrameworkEntity object
     *
     * @param stdClass $framework
     * @return FrameworkEntity
     */
    public static function hydrate(stdClass $framework)
    {
        $hydrated = new FrameworkEntity();

        if (isset($framework->id)) {
            $hydrated->setId($framework->id);
        }

        if (isset($framework->name)) {
            $hydrated->setName($framework->name);
        }

        if (isset($framework->version)) {
            $hydrated->setVersion($framework->version);
        }

        return $hydrated;
    }
}
