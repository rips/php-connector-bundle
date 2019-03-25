<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Hydrators\LanguageHydrator;
use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Type\ResourceHydrator;

class TypeHydrator
{
    /**
     * Hydrate a collection of type objects into a collection of
     * TypeEntity objects
     *
     * @param stdClass[] $types
     * @return TypeEntity[]
     */
    public static function hydrateCollection(array $types)
    {
        $hydrated = [];

        foreach ($types as $type) {
            $hydrated[] = self::hydrate($type);
        }

        return $hydrated;
    }

    /**
     * Hydrate a type object into a TypeEntity object
     *
     * @param stdClass $type
     * @return TypeEntity
     */
    public static function hydrate(stdClass $type)
    {
        $hydrated = new TypeEntity();

        if (isset($type->id)) {
            $hydrated->setId($type->id);
        }

        if (isset($type->tag)) {
            $hydrated->setTag($type->tag);
        }

        if (isset($type->description)) {
            $hydrated->setDescription($type->description);
        }

        if (isset($type->name)) {
            $hydrated->setName($type->name);
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

        if (isset($type->second_order)) {
            $hydrated->setSecondOrder($type->second_order);
        }

        if (isset($type->cwe)) {
            $hydrated->setCwe($type->cwe);
        }

        if (isset($type->owasp2010)) {
            $hydrated->setOwasp2010($type->owasp2010);
        }

        if (isset($type->owasp2013)) {
            $hydrated->setOwasp2013($type->owasp2013);
        }

        if (isset($type->owasp2017)) {
            $hydrated->setOwasp2017($type->owasp2017);
        }

        if (isset($type->sans)) {
            $hydrated->setSans($type->sans);
        }

        if (isset($type->pcidss)) {
            $hydrated->setPcidss($type->pcidss);
        }

        if (isset($type->asvs301)) {
            $hydrated->setAsvs301($type->asvs301);
        }

        if (isset($type->asvs401)) {
            $hydrated->setAsvs401($type->asvs401);
        }

        if (isset($type->enabled)) {
            $hydrated->setEnabled($type->enabled);
        }

        if (isset($type->category)) {
            $hydrated->setCategory($type->category);
        }

        if (isset($type->parent)) {
            $hydrated->setParent(self::hydrate($type->parent));
        }

        if (isset($type->resources)) {
            $hydrated->setResources(ResourceHydrator::hydrateCollection($type->resources));
        }

        if (isset($type->inactive)) {
            $hydrated->setInactive($type->inactive);
        }

        if (isset($type->languages) && is_array($type->languages)) {
            $hydrated->setLanguages(LanguageHydrator::hydrateCollection($type->languages));
        }

        return $hydrated;
    }
}
