<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\SanitizerEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;

class SanitizerHydrator
{
    /**
     * Hydrate a collection of sanitizer objects into a collection of
     * SanitizerEntity objects
     *
     * @param stdClass[] $sanitizers
     * @return SanitizerEntity[]
     */
    public static function hydrateCollection(array $sanitizers)
    {
        $hydrated = [];

        foreach ($sanitizers as $sanitizer) {
            $hydrated[] = self::hydrate($sanitizer);
        }

        return $hydrated;
    }

    /**
     * Hydrate a sanitizer object into a SanitizerEntity object
     *
     * @param stdClass $sanitizer
     * @return SanitizerEntity
     */
    public static function hydrate(stdClass $sanitizer)
    {
        $hydrated = new SanitizerEntity();

        if (isset($sanitizer->id)) {
            $hydrated->setId($sanitizer->id);
        }

        if (isset($sanitizer->class)) {
            $hydrated->setClass($sanitizer->class);
        }

        if (isset($sanitizer->method)) {
            $hydrated->setMethod($sanitizer->method);
        }

        if (isset($sanitizer->parameter)) {
            $hydrated->setParameter($sanitizer->parameter);
        }

        if (isset($sanitizer->characters)) {
            $hydrated->setCharacters($sanitizer->characters);
        }

        if (isset($sanitizer->issueType)) {
            $hydrated->setIssueType(TypeHydrator::hydrate($sanitizer->issueType));
        }

        return $hydrated;
    }
}
