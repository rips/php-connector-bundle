<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;

class ProcessHydrator
{
    /**
     * Hydrate a collection of process objects into a collection of
     * ProcessEntity objects
     *
     * @param stdClass[] $processes
     * @return ProcessEntity[]
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
     * Hydrate a process object into a ProcessEntity object
     *
     * @param stdClass $process
     * @return ProcessEntity
     */
    public static function hydrate(stdClass $process)
    {
        $hydrated = new ProcessEntity();

        if (isset($process->id)) {
            $hydrated->setId($process->id);
        }

        if (isset($process->pid)) {
            $hydrated->setPid($process->pid);
        }

        if (isset($process->version)) {
            $hydrated->setVersion($process->version);
        }

        if (isset($process->name)) {
            $hydrated->setName($process->name);
        }

        if (isset($process->started_at)) {
            $hydrated->setStartedAt(new DateTime($process->started_at));
        }

        if (isset($process->finished_at)) {
            $hydrated->setFinishedAt(new DateTime($process->finished_at));
        }

        if (isset($process->finished)) {
            $hydrated->setFinished($process->finished);
        }

        if (isset($process->memory)) {
            $hydrated->setMemory($process->memory);
        }

        if (isset($process->phase)) {
            $hydrated->setPhase($process->phase);
        }

        if (isset($process->percent)) {
            $hydrated->setPercent($process->percent);
        }

        if (isset($process->original_percent)) {
            $hydrated->setOriginalPercent($process->original_percent);
        }

        if (isset($process->weight)) {
            $hydrated->setWeight($process->weight);
        }

        if (isset($process->parent)) {
            $hydrated->setParent(self::hydrate($process->parent));
        }

        return $hydrated;
    }
}
