<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\EntrypointEntity;

class EntrypointHydrator
{
    /**
     * Hydrate a collection of entrypoint objects into a collection of
     * EntrypointEntity objects
     *
     * @param stdClass[] $entrypoints
     * @return EntrypointEntity[]
     */
    public static function hydrateCollection(array $entrypoints)
    {
        $hydrated = [];

        foreach ($entrypoints as $entrypoint) {
            $hydrated[] = self::hydrate($entrypoint);
        }

        return $hydrated;
    }

    /**
     * Hydrate a entrypoint object into a EntrypointEntity object
     *
     * @param stdClass $entrypoint
     * @return EntrypointEntity
     */
    public static function hydrate(stdClass $entrypoint)
    {
        $hydrated = new EntrypointEntity();

        if (isset($entrypoint->id)) {
            $hydrated->setId($entrypoint->id);
        }

        if (isset($entrypoint->line)) {
            $hydrated->setLine($entrypoint->line);
        }

        if (isset($entrypoint->file)) {
            $hydrated->setFile(FileHydrator::hydrate($entrypoint->file));
        }

        if (isset($entrypoint->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($entrypoint->function));
        }

        if (isset($entrypoint->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($entrypoint->class));
        }

        return $hydrated;
    }
}
