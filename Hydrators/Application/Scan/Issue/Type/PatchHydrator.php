<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Type;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type\PatchEntity;
use RIPS\ConnectorBundle\Hydrators\LanguageHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;

class PatchHydrator
{
    /**
     * Hydrate a collection of patch objects into a collection of
     * PatchEntity objects
     *
     * @param stdClass[] $patches
     * @return PatchEntity[]
     */
    public static function hydrateCollection(array $patches)
    {
        $hydrated = [];

        foreach ($patches as $patch) {
            $hydrated[] = self::hydrate($patch);
        }

        return $hydrated;
    }

    /**
     * Hydrate a patch object into a PatchEntity object
     *
     * @param stdClass $patch
     * @return PatchEntity
     */
    public static function hydrate(stdClass $patch)
    {
        $hydrated = new PatchEntity();

        if (isset($patch->id)) {
            $hydrated->setId($patch->id);
        }

        if (isset($patch->description)) {
            $hydrated->setDescription($patch->description);
        }

        if (isset($patch->examples) && is_array($patch->examples)) {
            $hydrated->setExamples($patch->examples);
        }

        if (isset($patch->type)) {
            $hydrated->setType(TypeHydrator::hydrate($patch->type));
        }

        if (isset($patch->language)) {
            $hydrated->setLanguage(LanguageHydrator::hydrate($patch->language));
        }

        return $hydrated;
    }
}
