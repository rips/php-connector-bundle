<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Hydrators\Application\Scan\Source\TypeHydrator;
use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class SourceHydrator
{
    /**
     * Hydrate a collection of source objects into a collection of
     * SourceEntity objects
     *
     * @param stdClass[] $sources
     * @return SourceEntity[]
     */
    public static function hydrateCollection(array $sources)
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
     * @param stdClass $source
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

        if (isset($source->startLine)) {
            $hydrated->setStartLine($source->startLine);
        }

        if (isset($source->endLine)) {
            $hydrated->setEndLine($source->endLine);
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

        if (isset($source->issues) && is_array($source->issues)) {
            $hydrated->setIssues(IssueHydrator::hydrateCollection($source->issues));
        }

        if (isset($source->startColumn)) {
            $hydrated->setStartColumn($source->startColumn);
        }

        if (isset($source->endColumn)) {
            $hydrated->setEndColumn($source->endColumn);
        }

        if (isset($source->type)) {
            $hydrated->setType(TypeHydrator::hydrate($source->type));
        }

        return $hydrated;
    }
}
