<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;

class ProcessHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * ProcessEntity objects
     *
     * @param  array<stdClass> $processes
     * @return array<ProcessEntity>
     */
    public static function hydrateCollection(array $processes)
    {
        $hydrated = [];

        foreach ($processes as $process) {
            $hydrated[] = self::hydrate($process);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a UserEntity object
     *
     * @param  stdClass $process
     * @return ProcessEntity
     */
    public static function hydrate(\stdClass $process)
    {
        $hydrated = new ProcessEntity();

        $hydrated->setId($process->id);
        $hydrated->setPId($process->pid);
        $hydrated->setVersion($process->version);

        return $hydrated;
    }
}
