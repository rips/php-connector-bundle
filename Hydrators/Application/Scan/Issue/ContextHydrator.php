<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ContextEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Context\PartHydrator;

class ContextHydrator
{
    /**
     * Hydrate a collection of context objects into a collection of
     * ContextEntity objects
     *
     * @param stdClass[] $contexts
     * @return ContextEntity[]
     */
    public static function hydrateCollection(array $contexts)
    {
        $hydrated = [];

        foreach ($contexts as $context) {
            $hydrated[] = self::hydrate($context);
        }

        return $hydrated;
    }

    /**
     * Hydrate a context object into a ContextEntity object
     *
     * @param stdClass $context
     * @return ContextEntity
     */
    public static function hydrate(stdClass $context)
    {
        $hydrated = new ContextEntity();

        if (isset($context->id)) {
            $hydrated->setId($context->id);
        }

        if (isset($context->parts)) {
            $hydrated->setParts(PartHydrator::hydrateCollection($context->parts));
        }

        return $hydrated;
    }
}
