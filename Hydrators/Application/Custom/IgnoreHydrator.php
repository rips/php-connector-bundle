<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Custom;

use stdClass;
use RIPS\ConnectorBundle\Entities\Application\Custom\IgnoreEntity;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;

class IgnoreHydrator
{
    /**
     * Hydrate a collection of ignore objects into a collection of
     * IgnoreEntity objects
     *
     * @param stdClass[] $ignores
     * @return IgnoreEntity[]
     */
    public static function hydrateCollection(array $ignores)
    {
        $hydrated = [];

        foreach ($ignores as $ignore) {
            $hydrated[] = self::hydrate($ignore);
        }

        return $hydrated;
    }

    /**
     * Hydrate a ignore object into a IgnoreEntity object
     *
     * @param stdClass $ignore
     * @return IgnoreEntity
     */
    public static function hydrate(stdClass $ignore)
    {
        $hydrated = new IgnoreEntity();

        if (isset($ignore->id)) {
            $hydrated->setId($ignore->id);
        }

        if (isset($ignore->class)) {
            $hydrated->setClass($ignore->class);
        }

        if (isset($ignore->method)) {
            $hydrated->setMethod($ignore->method);
        }

        if (isset($ignore->type)) {
            $hydrated->setType($ignore->type);
        }

        if (isset($ignore->folder)) {
            $hydrated->setFolder($ignore->folder);
        }

        if (isset($ignore->full_path)) {
            $hydrated->setFullPath($ignore->full_path);
        }

        if (isset($ignore->code_quality_folder)) {
            $hydrated->setCodeQualityFolder($ignore->code_quality_folder);
        }

        if (isset($ignore->custom)) {
            $hydrated->setCustom(CustomHydrator::hydrate($ignore->custom));
        }

        return $hydrated;
    }
}
