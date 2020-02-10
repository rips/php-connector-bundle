<?php

namespace RIPS\ConnectorBundle\Hydrators\Server;

use RIPS\ConnectorBundle\Entities\Server\SystemEntity;
use stdClass;

class SystemHydrator
{
    /**
     * Hydrate a server object into a SystemEntity object
     *
     * @param stdClass $system
     * @return SystemEntity
     */
    public static function hydrate(stdClass $system)
    {
        $hydrated = new SystemEntity();

        if (isset($system->memoryUsed)) {
            $hydrated->setMemoryUsed($system->memoryUsed);
        }

        if (isset($system->diskSpaceFree)) {
            $hydrated->setDiskSpaceFree($system->diskSpaceFree);
        }

        if (isset($system->diskSpaceAvailable)) {
            $hydrated->setDiskSpaceAvailable($system->diskSpaceAvailable);
        }

        if (isset($system->cpuUsage)) {
            $hydrated->setCpuUsage($system->cpuUsage);
        }

        return $hydrated;
    }
}
