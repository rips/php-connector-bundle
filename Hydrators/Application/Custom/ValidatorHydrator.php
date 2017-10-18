<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Custom;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Custom\ValidatorEntity;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;

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

        if (isset($validator->custom)) {
            $hydrated->setCustom(CustomHydrator::hydrate($validator->custom));
        }

        return $hydrated;
    }
}
