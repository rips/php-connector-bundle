<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Property\TypeHydrator;

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

        if (isset($source->start_line)) {
            $hydrated->setStartLine($source->start_line);
        }

        if (isset($source->end_line)) {
            $hydrated->setEndLine($source->end_line);
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

        if (isset($source->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($source->function));
        }

        if (isset($source->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($source->class));
        }

        if (isset($source->start_column)) {
            $hydrated->setStartColumn($source->start_column);
        }

        if (isset($source->end_column)) {
            $hydrated->setEndColumn($source->end_column);
        }

        if (isset($source->type)) {
            $hydrated->setType(TypeHydrator::hydrate($source->type));
        }

        if (isset($source->taint)) {
            $hydrated->setTaint(TaintHydrator::hydrate($source->taint));
        }

        return $hydrated;
    }
}
