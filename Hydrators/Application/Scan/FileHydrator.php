<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\FileEntity;

class FileHydrator
{
    /**
     * Hydrate a collection of file objects into a collection of
     * FileEntity objects
     *
     * @param stdClass[] $file
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
     * Hydrate a user object into a FileEntity object
     *
     * @param  \stdClass $file
     * @return FileEntity
     */
    public static function hydrate(\stdClass $file)
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

        return $hydrated;
    }
}
