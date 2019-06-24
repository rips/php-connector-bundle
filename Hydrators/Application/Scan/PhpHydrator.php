<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SettingHydrator;

class PhpHydrator
{
    /**
     * Hydrate a collection of php objects into a collection of
     * PhpEntity objects
     *
     * @param stdClass[] $phps
     * @return PhpEntity[]
     */
    public static function hydrateCollection(array $phps)
    {
        $hydrated = [];

        foreach ($phps as $php) {
            $hydrated[] = self::hydrate($php);
        }

        return $hydrated;
    }

    /**
     * Hydrate a php object into a PhpEntity object
     *
     * @param \stdClass $php
     * @return PhpEntity
     */
    public static function hydrate(stdClass $php)
    {
        $hydrated = new PhpEntity();

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

        if (isset($php->magic_quotes_gpc)) {
            $hydrated->setMagicQuotesGpc($php->magic_quotes_gpc);
        }

        if (isset($php->register_globals)) {
            $hydrated->setRegisterGlobals($php->register_globals);
        }

        if (isset($php->allow_url_fopen)) {
            $hydrated->setAllowUrlFopen($php->allow_url_fopen);
        }

        if (isset($php->allow_url_include)) {
            $hydrated->setAllowUrlInclude($php->allow_url_include);
        }

        if (isset($php->filter_default)) {
            $hydrated->setFilterDefault($php->filter_default);
        }

        if (isset($php->setting)) {
            $hydrated->setSetting(SettingHydrator::hydrate($php->setting));
        }

        if (isset($php->second_orders) && is_array($php->second_orders)) {
            $hydrated->setSecondOrders($php->second_orders);
        }

        return $hydrated;
    }
}
