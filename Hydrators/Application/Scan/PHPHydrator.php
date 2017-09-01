<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;

class PhpHydrator
{
    /**
     * Hydrate a collection of php objects into a collection of
     * PhpEntity objects
     *
     * @param stdClass[] $php
     * @return PhpEntity[]
     */
    public static function hydrateCollection(array $phpObjects)
    {
        $hydrated = [];

        foreach ($phpObjects as $php) {
            $hydrated[] = self::hydrate($php);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a UserEntity object
     *
     * @param stdClass $php
     * @return PhpEntity
     */
    public static function hydrate(\stdClass $php)
    {
        $hydrated = new PhpEntity();

        if (isset($php->id)) {
            $hydrated->setId($php->id);
        }

        if (isset($php->majorVersion)) {
            $hydrated->setMajorVersion($php->majorVersion);
        }

        if (isset($php->minorVersion)) {
            $hydrated->setMinorVersion($php->minorVersion);
        }

        if (isset($php->releaseVersion)) {
            $hydrated->setReleaseVersion($php->releaseVersion);
        }

        if (isset($php->magicQuotesGpc)) {
            $hydrated->setMagicQuotesGpc($php->magicQuotesGpc);
        }

        if (isset($php->registerGlobals)) {
            $hydrated->setRegisterGlobals($php->registerGlobals);
        }

        if (isset($php->allowUrlFOpen)) {
            $hydrated->setAllowUrlFOpen($php->allowUrlFOpen);
        }

        if (isset($php->allowUrlInclude)) {
            $hydrated->setAllowUrlInclude($php->allowUrlInclude);
        }

        if (isset($php->filterDefault)) {
            $hydrated->setFilterDefault($php->filterDefault);
        }

        return $hydrated;
    }
}
