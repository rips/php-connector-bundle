<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\SanitiserEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;

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

        if (isset($sanitiser->issueType)) {
            $hydrated->setIssueType(TypeHydrator::hydrate($sanitiser->issueType));
        }

        return $hydrated;
    }
}
