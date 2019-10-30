<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\JavaEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SettingHydrator;

class JavaHydrator
{
    /**
     * Hydrate a collection of java objects into a collection of
     * JavaEntity objects
     *
     * @param stdClass[] $javas
     * @return JavaEntity[]
     */
    public static function hydrateCollection(array $javas)
    {
        $hydrated = [];

        foreach ($javas as $java) {
            $hydrated[] = self::hydrate($java);
        }

        return $hydrated;
    }

    /**
     * Hydrate a java object into a JavaEntity object
     *
     * @param \stdClass $java
     * @return JavaEntity
     */
    public static function hydrate(stdClass $java)
    {
        $hydrated = new JavaEntity();

        if (isset($java->id)) {
            $hydrated->setId($java->id);
        }

        if (isset($java->major_version)) {
            $hydrated->setMajorVersion($java->major_version);
        }

        if (isset($java->minor_version)) {
            $hydrated->setMinorVersion($java->minor_version);
        }

        if (isset($java->release_version)) {
            $hydrated->setReleaseVersion($java->release_version);
        }

        if (isset($java->implementation)) {
            $hydrated->setImplementation($java->implementation);
        }

        if (isset($java->setting)) {
            $hydrated->setSetting(SettingHydrator::hydrate($java->setting));
        }

        if (isset($java->update_database)) {
            $hydrated->setUpdateDatabase($java->update_database);
        }

        return $hydrated;
    }
}
