<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use \stdClass;
use \DateTime;

class ExtensionHydrator
{
    /**
     * Hydrate a collection of extension objects into a collection of
     * ExtensionEntity objects
     *
     * @param stdClass[] $extensions
     * @return ExtensionEntity[]
     */
    public static function hydrateCollection(array $extensions)
    {
        $hydrated = [];

        foreach ($extensions as $extension) {
            $hydrated[] = self::hydrate($extension);
        }

        return $hydrated;
    }

    /**
     * Hydrate a extension object into a ExtensionEntity object
     *
     * @param stdClass $extension
     * @return ExtensionEntity
     */
    public static function hydrate(stdClass $extension)
    {
        $hydrated = new ExtensionEntity();

        if (isset($extension->id)) {
            $hydrated->setId($extension->id);
        }

        if (isset($extension->application_id)) {
            $hydrated->setApplicationId($extension->application_id);
        }

        if (isset($extension->organisation_id)) {
            $hydrated->setOrganisationId($extension->organisation_id);
        }

        if (isset($extension->at)) {
            $hydrated->setAt(new DateTime($extension->at));
        }

        return $hydrated;
    }
}
