<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use \stdClass;
use RIPS\ConnectorBundle\Entities\Application\ProfileEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SourceHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SinkHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\ValidatorHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SanitizerHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoreHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\ExtensionHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\ControllerHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SettingHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class ProfileHydrator
{
    /**
     * Hydrate a collection of profile objects into a collection of
     * ProfileEntity objects
     *
     * @param stdClass[] $profiles
     * @return ProfileEntity[]
     */
    public static function hydrateCollection(array $profiles)
    {
        $hydrated = [];

        foreach ($profiles as $profile) {
            $hydrated[] = self::hydrate($profile);
        }

        return $hydrated;
    }

    /**
     * Hydrate a profile object into a ProfileEntity object
     *
     * @param stdClass $profile
     * @return ProfileEntity
     */
    public static function hydrate(stdClass $profile)
    {
        $hydrated = new ProfileEntity();

        if (isset($profile->id)) {
            $hydrated->setId($profile->id);
        }

        if (isset($profile->name)) {
            $hydrated->setName($profile->name);
        }

        if (isset($profile->setting)) {
            $hydrated->setSetting(SettingHydrator::hydrate($profile->setting));
        }

        if (isset($profile->controllers) && is_array($profile->controllers)) {
            $hydrated->setControllers(ControllerHydrator::hydrateCollection($profile->controllers));
        }

        if (isset($profile->sources) && is_array($profile->sources)) {
            $hydrated->setSources(SourceHydrator::hydrateCollection($profile->sources));
        }

        if (isset($profile->sinks) && is_array($profile->sinks)) {
            $hydrated->setSinks(SinkHydrator::hydrateCollection($profile->sinks));
        }

        if (isset($profile->validators) && is_array($profile->validators)) {
            $hydrated->setValidators(ValidatorHydrator::hydrateCollection($profile->validators));
        }

        if (isset($profile->sanitizers) && is_array($profile->sanitizers)) {
            $hydrated->setSanitizers(SanitizerHydrator::hydrateCollection($profile->sanitizers));
        }

        if (isset($profile->ignores) && is_array($profile->ignores)) {
            $hydrated->setIgnores(IgnoreHydrator::hydrateCollection($profile->ignores));
        }

        if (isset($profile->extensions) && is_array($profile->extensions)) {
            $hydrated->setExtensions(ExtensionHydrator::hydrateCollection($profile->extensions));
        }

        if (isset($profile->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($profile->application));
        }

        if (isset($profile->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($profile->created_by));
        }

        return $hydrated;
    }
}
