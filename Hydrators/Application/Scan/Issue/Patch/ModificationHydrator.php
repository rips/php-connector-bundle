<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Patch;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Patch\ModificationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\FileHydrator;

class ModificationHydrator
{
    /**
     * Hydrate a collection of modification objects into a collection of
     * ModificationEntity objects
     *
     * @param stdClass[] $modifications
     * @return ModificationEntity[]
     */
    public static function hydrateCollection(array $modifications)
    {
        $hydrated = [];

        foreach ($modifications as $modification) {
            $hydrated[] = self::hydrate($modification);
        }

        return $hydrated;
    }

    /**
     * Hydrate a modification object into a ModificationEntity object
     *
     * @param stdClass $modification
     * @return ModificationEntity
     */
    public static function hydrate(stdClass $modification)
    {
        $hydrated = new ModificationEntity();

        if (isset($modification->id)) {
            $hydrated->setId($modification->id);
        }

        if (isset($modification->virtual_line)) {
            $hydrated->setVirtualLine($modification->virtual_line);
        }

        if (isset($modification->original_line)) {
            $hydrated->setOriginalLine($modification->original_line);
        }

        if (isset($modification->column_start)) {
            $hydrated->setColumnStart($modification->column_start);
        }

        if (isset($modification->column_end)) {
            $hydrated->setColumnEnd($modification->column_end);
        }

        if (isset($modification->content)) {
            $hydrated->setContent($modification->content);
        }

        if (isset($modification->highlighted_content)) {
            $hydrated->setHighlightedContent($modification->highlighted_content);
        }

        if (isset($modification->file)) {
            $hydrated->setFile(FileHydrator::hydrate($modification->file));
        }

        return $hydrated;
    }
}
