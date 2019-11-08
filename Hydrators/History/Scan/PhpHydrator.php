<?php

namespace RIPS\ConnectorBundle\Hydrators\History\Scan;

use RIPS\ConnectorBundle\Entities\History\Scan\PhpEntity;

class PhpHydrator
{
    /**
     * Hydrate a history scan php object into a PhpEntity object
     *
     * @param \stdClass $php
     * @return PhpEntity
     */
    public static function hydrate(\stdClass $php)
    {
        $hydrated = new PhpEntity();

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

        if (isset($php->framework_hinting)) {
            $hydrated->setFrameworkHinting($php->framework_hinting);
        }

        if (isset($php->allow_url_include)) {
            $hydrated->setAllowUrlInclude($php->allow_url_include);
        }

        if (isset($php->filter_default)) {
            $hydrated->setFilterDefault($php->filter_default);
        }

        return $hydrated;
    }
}
