<?php

namespace RIPS\ConnectorBundle\Hydrators\System;

use RIPS\ConnectorBundle\Entities\System\HealthModuleEntity;
use stdClass;

class HealthModuleHydrator
{
    /**
     * Hydrate a collection of health module objects into a collection of
     * HealthModuleEntity objects
     *
     * @param stdClass[] $modules
     * @return HealthModuleEntity[]
     */
    public static function hydrateCollection(array $modules)
    {
        $hydrated = [];

        foreach ($modules as $name => $module) {
            $hydrated[] = self::hydrate($module, $name);
        }

        return $hydrated;
    }

    /**
     * Hydrate a health module object into a HealthModuleEntity object
     *
     * @param stdClass $module
     * @param $name
     * @return HealthModuleEntity
     */
    public static function hydrate(stdClass $module, $name)
    {
        $hydrated = new HealthModuleEntity();

        if (isset($name)) {
            $hydrated->setName($name);
        }

        if (isset($module->state)) {
            $hydrated->setState($module->state);
        }

        if (isset($module->messages)) {
            $hydrated->setMessages($module->messages);
        }

        if (isset($module->timestamp)) {
            $hydrated->setTimestamp($module->timestamp);
        }

        if (isset($module->parameters) && is_array($module->parameters)) {
            $hydrated->setParameters(HealthModuleParameterHydrator::hydrateCollection($module->parameters));
        }

        return $hydrated;
    }
}
