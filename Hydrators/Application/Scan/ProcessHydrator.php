<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

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

        if (isset($process->start)) {
            $hydrated->setStart(new DateTime($process->start));
        }

        if (isset($process->finish)) {
            $hydrated->setFinish(new DateTime($process->finish));
        }

        if (isset($process->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($process->scan));
        }

        return $hydrated;
    }
}
