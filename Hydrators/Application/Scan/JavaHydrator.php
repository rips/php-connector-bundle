<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\JavaEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SettingHydrator;

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
     * @param \stdClass $php
     * @return JavaEntity
     */
    public static function hydrate(stdClass $php)
    {
        $hydrated = new JavaEntity();

        if (isset($php->id)) {
            $hydrated->setId($php->id);
        }

        if (isset($php->major_version)) {
            $hydrated->setMajorVersion($php->major_version);
        }

        if (isset($php->minor_version)) {
            $hydrated->setMinorVersion($php->minor_version);
        }

        if (isset($php->release_version)) {
            $hydrated->setReleaseVersion($php->release_version);
        }

        if (isset($php->implementation)) {
            $hydrated->setImplementation($php->implementation);
        }

        if (isset($php->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($php->scan));
        }

        if (isset($php->setting)) {
            $hydrated->setSetting(SettingHydrator::hydrate($php->setting));
        }

        return $hydrated;
    }
}
