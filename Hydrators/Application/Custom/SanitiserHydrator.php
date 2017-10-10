<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use \stdClass;
use RIPS\ConnectorBundle\Entities\Application\Custom\SanitiserEntity;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;

class SanitiserHydrator
{
    /**
     * Hydrate a collection of sanitiser objects into a collection of
     * SanitiserEntity objects
     *
     * @param stdClass[] $sanitisers
     * @return SanitiserEntity[]
     */
    public static function hydrateCollection(array $sanitisers)
    {
        $hydrated = [];

        foreach ($sanitisers as $sanitiser) {
            $hydrated[] = self::hydrate($sanitiser);
        }

        return $hydrated;
    }

    /**
     * Hydrate a sanitiser object into a SanitiserEntity object
     *
     * @param stdClass $sanitiser
     * @return SanitiserEntity
     */
    public static function hydrate(stdClass $sanitiser)
    {
        $hydrated = new SanitiserEntity();

        if (isset($sanitiser->id)) {
            $hydrated->setId($sanitiser->id);
        }

        if (isset($sanitiser->class)) {
            $hydrated->setClass($sanitiser->class);
        }

        if (isset($sanitiser->method)) {
            $hydrated->setMethod($sanitiser->method);
        }

        if (isset($sanitiser->parameter)) {
            $hydrated->setParameter($sanitiser->parameter);
        }

        if (isset($sanitiser->characters)) {
            $hydrated->setCharacters($sanitiser->characters);
        }

        if (isset($sanitiser->custom)) {
            $hydrated->setCustom(CustomHydrator($sanitiser->custom));
        }

        return $hydrated;
    }
}
