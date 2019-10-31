<?php

namespace RIPS\ConnectorBundle\Hydrators\Application;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\ArtifactEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class ArtifactHydrator
{
    /**
     * Hydrate a collection of artifact objects into a collection of
     * ArtifactEntity objects
     *
     * @param stdClass[] $artifacts
     * @return ArtifactEntity[]
     */
    public static function hydrateCollection(array $artifacts)
    {
        $hydrated = [];

        foreach ($artifacts as $artifact) {
            $hydrated[] = self::hydrate($artifact);
        }

        return $hydrated;
    }

    /**
     * Hydrate a artifact object into a ArtifactEntity object
     *
     * @param stdClass $artifact
     * @return ArtifactEntity
     */
    public static function hydrate(stdClass $artifact)
    {
        $hydrated = new ArtifactEntity;

        if (isset($artifact->id)) {
            $hydrated->setId($artifact->id);
        }

        if (isset($artifact->created_at)) {
            $hydrated->setCreatedAt(new DateTime($artifact->created_at));
        }

        if (isset($artifact->name)) {
            $hydrated->setName($artifact->name);
        }

        if (isset($artifact->path)) {
            $hydrated->setPath($artifact->path);
        }

        if (isset($artifact->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($artifact->created_by));
        }

        if (isset($artifact->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($artifact->scan));
        }

        return $hydrated;
    }
}
