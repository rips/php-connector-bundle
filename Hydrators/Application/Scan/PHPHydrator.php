<?php


namespace RIPS\ConnectorBundle\Hydrators\Application;

use RIPS\ConnectorBundle\Entities\Application\PhpEntity;

class PHPHydrator
{
    /**
     * Hydrate a collection of php objects into a collection of
     * PhpEntity objects
     *
     * @param  array<stdClass> $php
     * @return array<PhpEntity>
     */
    public static function hydrateCollection(array $PhpObjects)
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
     * @param  stdClass $php
     * @return PhpEntity
     */
    public static function hydrate(\stdClass $php)
    {
        $hydrated = new PhpEntity();

        $hydrated->setId($php->id);
        $hydrated->setMajorVersion($php->majorVersion);
        $hydrated->setMinorVersion($php->minorVersion);
        $hydrated->setReleaseVersion($php->releaseVersion);
        $hydrated->setMagicQuotesGpc($php->magicQuotesGpc);
        $hydrated->setRegisterGlobals($php->registerGlobals);
        $hydrated->setAllowUrlFOpen($php->allowUrlFOpen);
        $hydrated->setAllowUrlInclude($php->allowUrlInclude);
        $hydrated->setFilterDefault($php->filterDefault);

        return $hydrated;
    }
}
