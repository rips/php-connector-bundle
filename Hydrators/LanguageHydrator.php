<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\LanguageEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Type\ResourceHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use stdClass;

class LanguageHydrator
{
    /**
     * Hydrate a collection of language objects into a collection of
     * LanguageEntity objects
     *
     * @param stdClass[] $languages
     * @return LanguageEntity[]
     */
    public static function hydrateCollection(array $languages)
    {
        $hydrated = [];

        foreach ($languages as $language) {
            $hydrated[] = self::hydrate($language);
        }

        return $hydrated;
    }

    /**
     * Hydrate a language object into a LanguageEntity object
     *
     * @param stdClass $language
     * @return LanguageEntity
     */
    public static function hydrate(stdClass $language)
    {
        $hydrated = new LanguageEntity();

        if (isset($language->id)) {
            $hydrated->setId($language->id);
        }

        if (isset($language->name)) {
            $hydrated->setName($language->name);
        }

        if (isset($language->file_extensions)) {
            $hydrated->setFileExtensions($language->file_extensions);
        }

        if (isset($language->config_file_extensions)) {
            $hydrated->setConfigFileExtensions($language->config_file_extensions);
        }

        if (isset($language->archive_extensions)) {
            $hydrated->setArchiveExtensions($language->archive_extensions);
        }

        if (isset($language->issueTypes) && is_array($language->issueTypes)) {
            $hydrated->setIssueTypes(TypeHydrator::hydrateCollection($language->issueTypes));
        }

        if (isset($language->ressources) && is_array($language->ressources)) {
            $hydrated->setResources(ResourceHydrator::hydrateCollection($language->ressources));
        }

        if (isset($language->scans) && is_array($language->scans)) {
            $hydrated->setScans(ScanHydrator::hydrateCollection($language->scans));
        }

        return $hydrated;
    }
}
