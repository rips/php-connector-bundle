<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use \stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomFunctionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\CustomClassHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class SourceHydrator
{
    /**
     * Hydrate a collection of source objects into a collection of
     * SourceEntity objects
     *
     * @param stdClass[] $source
     * @return SourceEntity[]
     */
    public static function hydrateCollection($sources)
    {
        $hydrated = [];

        foreach ($sources as $source) {
            $hydrated[] = self::hydrate($source);
        }

        return $hydrated;
    }

    /**
     * Hydrate a source object into a SourceEntity object
     *
     * @param  \stdClass $source
     * @return SourceEntity
     */
    public static function hydrate(stdClass $source)
    {
        $hydrated = new SourceEntity();

        if (isset($source->id)) {
            $hydrated->setId($source->id);
        }

        if (isset($source->line)) {
            $hydrated->setLine($source->line);
        }

        if (isset($source->name)) {
            $hydrated->setName($source->name);
        }

        if (isset($source->parameter)) {
            $hydrated->setParameter($source->parameter);
        }

        if (isset($source->file)) {
            $hydrated->setFile(FileHydrator::hydrate($source->file));
        }

        if (isset($source->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($source->scan));
        }

        if (isset($source->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($source->function));
        }

        if (isset($source->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($source->class));
        }

        if (isset($source->issues)) {
            $hydrated->setIssues(IssueHydrator::hydrateCollection($source->issues));
        }

        return $hydrated;
    }
}
