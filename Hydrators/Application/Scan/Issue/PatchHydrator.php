<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\PatchEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Patch\ModificationHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Patch\TypeHydrator;

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

        if (isset($patch->issue)) {
            $hydrated->setIssue(IssueHydrator::hydrate($patch->issue));
        }

        if (isset($patch->type)) {
            $hydrated->setType(TypeHydrator::hydrate($patch->type));
        }

        if (isset($patch->modifications)) {
            $hydrated->setModifications(ModificationHydrator::hydrateCollection($patch->modifications));
        }

        return $hydrated;
    }
}
