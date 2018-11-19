<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\ConcatEntity;

class ConcatHydrator
{
    /**
     * Hydrate a collection of concat objects into a collection of
     * ConcatEntity objects
     *
     * @param stdClass[] $concats
     * @return ConcatEntity[]
     */
    public static function hydrateCollection(array $concats)
    {
        $hydrated = [];

        foreach ($concats as $concat) {
            $hydrated[] = self::hydrate($concat);
        }

        return $hydrated;
    }

    /**
     * Hydrate a concat object into a ConcatEntity object
     *
     * @param stdClass $concat
     * @return ConcatEntity
     */
    public static function hydrate(stdClass $concat)
    {
        $hydrated = new ConcatEntity();

        if (isset($concat->id)) {
            $hydrated->setId($concat->id);
        }

        if (isset($concat->line)) {
            $hydrated->setLine($concat->line);
        }

        if (isset($concat->startLine)) {
            $hydrated->setStartLine($concat->startLine);
        }

        if (isset($concat->endLine)) {
            $hydrated->setEndLine($concat->endLine);
        }

        if (isset($concat->file)) {
            $hydrated->setFile(FileHydrator::hydrate($concat->file));
        }

        if (isset($concat->function)) {
            $hydrated->setFunction(CustomFunctionHydrator::hydrate($concat->function));
        }

        if (isset($concat->class)) {
            $hydrated->setClass(CustomClassHydrator::hydrate($concat->class));
        }

        if (isset($concat->startColumn)) {
            $hydrated->setStartColumn($concat->startColumn);
        }

        if (isset($concat->endColumn)) {
            $hydrated->setEndColumn($concat->endColumn);
        }

        if (isset($concat->taint)) {
            $hydrated->setTaint(TaintHydrator::hydrate($concat->taint));
        }

        return $hydrated;
    }
}
