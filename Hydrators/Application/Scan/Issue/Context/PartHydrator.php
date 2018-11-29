<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Context;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Context\PartEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ContextHydrator;

class PartHydrator
{
    /**
     * Hydrate a collection of part objects into a collection of
     * PartEntity objects
     *
     * @param stdClass[] $parts
     * @return PartEntity[]
     */
    public static function hydrateCollection(array $parts)
    {
        $hydrated = [];

        foreach ($parts as $part) {
            $hydrated[] = self::hydrate($part);
        }

        return $hydrated;
    }

    /**
     * Hydrate a part object into a PartEntity object
     *
     * @param stdClass $part
     * @return PartEntity
     */
    public static function hydrate(stdClass $part)
    {
        $hydrated = new PartEntity();

        if (isset($part->id)) {
            $hydrated->setId($part->id);
        }

        if (isset($part->type)) {
            $hydrated->setType($part->type);
        }

        if (isset($part->content)) {
            $hydrated->setContent($part->content);
        }

        return $hydrated;
    }
}
