<?php

namespace RIPS\ConnectorBundle\Hydrators\System;

use RIPS\ConnectorBundle\Entities\System\HealthEntity;
use RIPS\ConnectorBundle\Entities\System\HealthModuleEntity;
use RIPS\ConnectorBundle\Entities\System\HealthModuleParameterEntity;
use stdClass;

class HealthModuleParameterHydrator
{
    /**
     * Hydrate a collection of health module parameter objects into a collection of
     * HealthModuleParameterEntity objects
     *
     * @param stdClass[] $parameters
     * @return HealthModuleParameterEntity[]
     */
    public static function hydrateCollection(array $parameters)
    {
        $hydrated = [];

        foreach ($parameters as $name => $value) {
            $hydrated[] = self::hydrate($value, $name);
        }

        return $hydrated;
    }

    /**
     * Hydrate a health module parameter values into a HealthModuleParameterEntity object
     *
     * @param $value
     * @param $name
     * @return HealthModuleParameterEntity
     */
    public static function hydrate($value, $name)
    {
        $hydrated = new HealthModuleParameterEntity();

        if (isset($name)) {
            $hydrated->setName($name);
        }

        if (isset($value)) {
            $hydrated->setValue($value);
        }

        return $hydrated;
    }
}
