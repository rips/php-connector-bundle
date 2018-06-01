<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Type;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type\ResourceEntity;

class ResourceHydrator
{
    /**
     * Hydrate a collection of resource objects into a collection of
     * ResourceEntity objects
     *
     * @param stdClass[] $resources
     * @return ResourceEntity[]
     */
    public static function hydrateCollection(array $resources)
    {
        $hydrated = [];

        foreach ($resources as $resource) {
            $hydrated[] = self::hydrate($resource);
        }

        return $hydrated;
    }

    /**
     * Hydrate a resource object into a ResourceEntity object
     *
     * @param stdClass $resource
     * @return ResourceEntity
     */
    public static function hydrate(stdClass $resource)
    {
        $hydrated = new ResourceEntity();

        if (isset($resource->id)) {
            $hydrated->setId($resource->id);
        }

        if (isset($resource->title)) {
            $hydrated->setTitle($resource->title);
        }

        if (isset($resource->author)) {
            $hydrated->setAuthor($resource->author);
        }

        if (isset($resource->url)) {
            $hydrated->setUrl($resource->url);
        }

        if (isset($resource->published_at)) {
            $hydrated->setPublishedAt(new DateTime($resource->published_at));
        }

        return $hydrated;
    }
}
