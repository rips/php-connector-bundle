<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;

class ProcessHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * ProcessEntity objects
     *
     * @param  array<\stdClass> $processes
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
     * @param  \stdClass $process
     * @return ProcessEntity
     */
    public static function hydrate(\stdClass $process)
    {
        $hydrated = new ProcessEntity();

        if (isset($process->id)){
            $hydrated->setId($process->id);
        }

        if (isset($process->pid)){
            $hydrated->setPId($process->pid);
        }

        if (isset($process->version)){
            $hydrated->setVersion($process->version);
        }

        return $hydrated;
    }
}
