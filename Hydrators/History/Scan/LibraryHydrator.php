<?php

namespace RIPS\ConnectorBundle\Hydrators\History\Scan;

use RIPS\ConnectorBundle\Entities\History\Scan\LibraryEntity;

class LibraryHydrator
{
    /**
     * Hydrate a collection of library objects into a collection of
     * LibraryEntity objects
     *
     * @param \stdClass[] $libraries
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
     * Hydrate a history scan library object into a LibraryEntity object
     *
     * @param \stdClass $library
     * @return LibraryEntity
     */
    public static function hydrate(\stdClass $library)
    {
        $hydrated = new LibraryEntity();

        if (isset($library->name)) {
            $hydrated->setName($library->name);
        }

        if (isset($library->version)) {
            $hydrated->setVersion($library->version);
        }

        if (isset($library->type)) {
            $hydrated->setType($library->type);
        }

        if (isset($library->implementation)) {
            $hydrated->setImplementation($library->implementation);
        }

        if (isset($library->group)) {
            $hydrated->setGroup($library->group);
        }

        return $hydrated;
    }
}
