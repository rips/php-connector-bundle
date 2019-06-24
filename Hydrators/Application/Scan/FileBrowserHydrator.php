<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileBrowserEntity;

class FileBrowserHydrator
{
    /**
     * Hydrate a collection of file browser objects into a collection of
     * FileBrowserEntity objects
     *
     * @param stdClass[] $files
     * @return FileBrowserEntity[]
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
     * Hydrate a file browser object into a FileBrowserEntity object
     *
     * @param stdClass $file
     * @return FileBrowserEntity
     */
    public static function hydrate(stdClass $file)
    {
        $hydrated = new FileBrowserEntity();

        if (isset($file->id)) {
            $hydrated->setId($file->id);
        }

        if (isset($file->loc)) {
            $hydrated->setLoc($file->loc);
        }

        if (isset($file->path)) {
            $hydrated->setPath($file->path);
        }

        if (isset($file->type)) {
            $hydrated->setType($file->type);
        }

        return $hydrated;
    }
}
