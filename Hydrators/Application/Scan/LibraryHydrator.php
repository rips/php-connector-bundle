<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\LibraryEntity;

class LibraryHydrator
{
    /**
     * Hydrate a collection of library objects into a collection of
     * LibraryEntity objects
     *
     * @param stdClass[] $libraries
     * @return LibraryEntity[]
     */
    public static function hydrateCollection(array $libraries)
    {
        $hydrated = [];

        foreach ($libraries as $library) {
            $hydrated[] = self::hydrate($library);
        }

        return $hydrated;
    }

    /**
     * Hydrate a library object into a LibraryEntity object
     *
     * @param stdClass $library
     * @return LibraryEntity
     */
    public static function hydrate(stdClass $library)
    {
        $hydrated = new LibraryEntity();

        if (isset($library->id)) {
            $hydrated->setId($library->id);
        }

        if (isset($library->name)) {
            $hydrated->setName($library->name);
        }

        if (isset($library->version)) {
            $hydrated->setVersion($library->version);
        }

        return $hydrated;
    }
}
