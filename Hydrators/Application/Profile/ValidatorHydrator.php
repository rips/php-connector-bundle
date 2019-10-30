<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Profile;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Profile\ValidatorEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;

class ValidatorHydrator
{
    /**
     * Hydrate a collection of validator objects into a collection of
     * ValidatorEntity objects
     *
     * @param stdClass[] $validators
     * @return ValidatorEntity[]
     */
    public static function hydrateCollection(array $validators)
    {
        $hydrated = [];

        foreach ($validators as $validator) {
            $hydrated[] = self::hydrate($validator);
        }

        return $hydrated;
    }

    /**
     * Hydrate a validator object into a ValidatorEntity object
     *
     * @param stdClass $validator
     * @return ValidatorEntity
     */
    public static function hydrate(stdClass $validator)
    {
        $hydrated = new ValidatorEntity();

        if (isset($validator->id)) {
            $hydrated->setId($validator->id);
        }

        if (isset($validator->class)) {
            $hydrated->setClass($validator->class);
        }

        if (isset($validator->method)) {
            $hydrated->setMethod($validator->method);
        }

        if (isset($validator->parameter)) {
            $hydrated->setParameter($validator->parameter);
        }

        if (isset($validator->characters)) {
            $hydrated->setCharacters($validator->characters);
        }

        if (isset($validator->issueType)) {
            $hydrated->setIssueType(TypeHydrator::hydrate($validator->issueType));
        }

        if (isset($validator->behavior)) {
            $hydrated->setBehavior($validator->behavior);
        }

        return $hydrated;
    }
}
