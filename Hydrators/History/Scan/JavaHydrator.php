<?php

namespace RIPS\ConnectorBundle\Hydrators\History\Scan;

use RIPS\ConnectorBundle\Entities\History\Scan\JavaEntity;

class JavaHydrator
{
    /**
     * Hydrate a history scan java object into a JavaEntity object
     *
     * @param \stdClass $java
     * @return JavaEntity
     */
    public static function hydrate(\stdClass $java)
    {
        $hydrated = new JavaEntity();

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

        return $hydrated;
    }
}
