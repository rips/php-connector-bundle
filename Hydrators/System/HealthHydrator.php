<?php

namespace RIPS\ConnectorBundle\Hydrators\System;

use RIPS\ConnectorBundle\Entities\System\HealthEntity;
use stdClass;

class HealthHydrator
{
    /**
     * Hydrate a health object into a HealthEntity object
     *
     * @param stdClass $health
     * @return HealthEntity
     */
    public static function hydrate(stdClass $health)
    {
        $hydrated = new HealthEntity();

        if (isset($health->state)) {
            $hydrated->setState($health->state);
        }

        if (isset($health->messages)) {
            $hydrated->setMessages($health->messages);
        }

        if (isset($health->modules) && is_array($health->modules)) {
            $hydrated->setModules(HealthModuleHydrator::hydrateCollection($health->modules));
        }

        return $hydrated;
    }
}
