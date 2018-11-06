<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use \stdClass;
use RIPS\ConnectorBundle\Entities\Application\CustomEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SourceHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SinkHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ValidatorHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SanitiserHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\IgnoreHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ExtensionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ControllerHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SettingHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class CustomHydrator
{
    /**
     * Hydrate a collection of custom objects into a collection of
     * CustomEntity objects
     *
     * @param stdClass[] $customs
     * @return CustomEntity[]
     */
    public static function hydrateCollection(array $customs)
    {
        $hydrated = [];

        foreach ($customs as $custom) {
            $hydrated[] = self::hydrate($custom);
        }

        return $hydrated;
    }

    /**
     * Hydrate a custom object into a CustomEntity object
     *
     * @param stdClass $custom
     * @return CustomEntity
     */
    public static function hydrate(stdClass $custom)
    {
        $hydrated = new CustomEntity();

        if (isset($custom->id)) {
            $hydrated->setId($custom->id);
        }

        if (isset($custom->name)) {
            $hydrated->setName($custom->name);
        }

        if (isset($custom->setting)) {
            $hydrated->setSetting(SettingHydrator::hydrate($custom->setting));
        }

        if (isset($custom->controllers) && is_array($custom->controllers)) {
            $hydrated->setControllers(ControllerHydrator::hydrateCollection($custom->controllers));
        }

        if (isset($custom->sources) && is_array($custom->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($custom->sources));
        }

        if (isset($custom->sinks) && is_array($custom->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($custom->sinks));
        }

        if (isset($custom->validators) && is_array($custom->validators)) {
            $hydrated->setValidators(ValidatorHydrator::hydrateCollection($custom->validators));
        }

        if (isset($custom->sanitisers) && is_array($custom->sanitisers)) {
            $hydrated->setSanitisers(SanitiserHydrator::hydrateCollection($custom->sanitisers));
        }

        if (isset($custom->ignores) && is_array($custom->ignores)) {
            $hydrated->setIgnores(IgnoreHydrator::hydrateCollection($custom->ignores));
        }

        if (isset($custom->extensions) && is_array($custom->extensions)) {
            $hydrated->setExtensions(ExtensionHydrator::hydrateCollection($custom->extensions));
        }

        if (isset($custom->scans) && is_array($custom->scans)) {
            $hydrated->setScans(ScanHydrator::hydrateCollection($custom->scans));
        }

        if (isset($custom->application)) {
            $hydrated->setApplication($custom->application);
        }

        if (isset($custom->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($custom->created_by));
        }

        return $hydrated;
    }
}
