<?php


namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;

class TypeHydrator
{
    /**
     * Hydrate a collection of user objects into a collection of
     * TypeEntity objects
     *
     * @param  array<stdClass> $type
     * @return array<TypeEntity>
     */
    public static function hydrateCollection(array $type)
    {
        $hydrated = [];

        foreach ($typess as $type) {
            $hydrated[] = self::hydrate($type);
        }

        return $hydrated;
    }

    /**
     * Hydrate a user object into a TypeEntity object
     *
     * @param  \stdClass $type
     * @return TypeEntity
     */
    public static function hydrate(\stdClass $type)
    {
        $hydrated = new TypeEntity();

        if (isset($type->id)) {
            $hydrated->setId($type->id);
        }

        if (isset($type->tag)) {
            $hydrated->setTag($type->tag);
        }

        if (isset($type->descrition)) {
            $hydrated->setDescrition($type->descrition);
        }

        if (isset($type->name)) {
            $hydrated->setName($type->name);
        }

        if (isset($type->color)) {
            $hydrated->setColor($type->color);
        }

        if (isset($type->markup)) {
            $hydrated->setMarkup($type->markup);
        }

        if (isset($type->severity)) {
            $hydrated->setSeverity($type->severity);
        }

        if (isset($type->effort)) {
            $hydrated->setEffort($type->effort);
        }

        if (isset($type->secondOrder)) {
            $hydrated->setSecondOrder($type->secondOrder);
        }

        if (isset($type->cwe)) {
            $hydrated->setCwe($type->cwe);
        }

        if (isset($type->owasp)) {
            $hydrated->setOwasp($type->owasp);
        }

        if (isset($type->sans)) {
            $hydrated->setSans($type->sans);
        }

        if (isset($type->pcidss)) {
            $hydrated->setPcidss($type->pcidss);
        }

        if (isset($type->enable)) {
            $hydrated->setEnable($type->enable);
        }

        if (isset($type->parent)) {
            $hydrated->setParent(TypeHydrator::hydrate($type->parent));
        }
    }
}
