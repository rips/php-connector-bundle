<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use \stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummaryHydrator;

class FileHydrator
{
    /**
     * Hydrate a collection of file objects into a collection of
     * FileEntity objects
     *
     * @param stdClass[] $files
     * @return FileEntity[]
     */
    public static function hydrateCollection(array $files)
    {
        $hydrated = [];

        foreach ($files as $file) {
            $hydrated[] = self::hydrate($file);
        }

        return $hydrated;
    }

    /**
     * Hydrate a file object into a FileEntity object
     *
     * @param stdClass $file
     * @return FileEntity
     */
    public static function hydrate(stdClass $file)
    {
        $hydrated = new FileEntity();

        if (isset($file->id)) {
            $hydrated->setId($file->id);
        }

        if (isset($file->loc)) {
            $hydrated->setLoc($file->loc);
        }

        if (isset($file->path)) {
            $hydrated->setPath($file->path);
        }

        if (isset($file->scanned)) {
            $hydrated->setScanned($file->scanned);
        }

        if (isset($file->sources) && is_array($file->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($file->sources));
        }

        if (isset($file->sinks) && is_array($file->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($file->sinks));
        }

        if (isset($file->concats) && is_array($file->concats)) {
            $hydrated->setConcats(ConcatHydrator::hydrateCollection($file->concats));
        }

        if (isset($file->functions) && is_array($file->functions)) {
            $hydrated->setFunctions(CustomFunctionHydrator::hydrateCollection($file->functions));
        }

        if (isset($file->classes) && is_array($file->classes)) {
            $hydrated->setClasses(CustomClassHydrator::hydrateCollection($file->classes));
        }

        if (isset($file->summaries) && is_array($file->summaries)) {
            $hydrated->setSummaries(SummaryHydrator::hydrateCollection($file->summaries));
        }

        if (isset($file->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($file->scan));
        }

        if (isset($file->code)) {
            $hydrated->setCode($file->code);
        }

        return $hydrated;
    }
}
