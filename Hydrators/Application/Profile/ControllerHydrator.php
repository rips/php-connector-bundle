<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\ControllerEntity;

class ControllerHydrator
{
    /**
     * Hydrate a collection of controller objects into a collection of
     * ControllerEntity objects
     *
     * @param stdClass[] $controllers
     * @return ControllerEntity[]
     */
    public static function hydrateCollection(array $controllers)
    {
        $hydrated = [];

        foreach ($controllers as $controller) {
            $hydrated[] = self::hydrate($controller);
        }

        return $hydrated;
    }

    /**
     * Hydrate a controller object into a SourceEntity object
     *
     * @param stdClass $controller
     * @return ControllerEntity
     */
    public static function hydrate(stdClass $controller)
    {
        $hydrated = new ControllerEntity();

        if (isset($controller->id)) {
            $hydrated->setId($controller->id);
        }

        if (isset($controller->class)) {
            $hydrated->setClass($controller->class);
        }

        if (isset($controller->method)) {
            $hydrated->setMethod($controller->method);
        }

        if (isset($controller->parameter)) {
            $hydrated->setParameter($controller->parameter);
        }

        if (isset($controller->type)) {
            $hydrated->setType($controller->type);
        }

        return $hydrated;
    }
}
