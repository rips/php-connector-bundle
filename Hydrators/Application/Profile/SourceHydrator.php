<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\SourceEntity;

class SourceHydrator
{
    /**
     * Hydrate a collection of source objects into a collection of
     * SourceEntity objects
     *
     * @param stdClass[] $sources
     * @return SourceEntity[]
     */
    public static function hydrateCollection(array $sources)
    {
        $hydrated = [];

        foreach ($sources as $source) {
            $hydrated[] = self::hydrate($source);
        }

        return $hydrated;
    }

    /**
     * Hydrate a source object into a SourceEntity object
     *
     * @param stdClass $source
     * @return SourceEntity
     */
    public static function hydrate(stdClass $source)
    {
        $hydrated = new SourceEntity();

        if (isset($source->id)) {
            $hydrated->setId($source->id);
        }

        if (isset($source->class)) {
            $hydrated->setClass($source->class);
        }

        if (isset($source->method)) {
            $hydrated->setMethod($source->method);
        }

        if (isset($source->property)) {
            $hydrated->setProperty($source->property);
        }

        if (isset($source->parameter)) {
            $hydrated->setParameter($source->parameter);
        }

        if (isset($source->type)) {
            $hydrated->setType($source->type);
        }

        return $hydrated;
    }
}
