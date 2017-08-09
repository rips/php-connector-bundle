<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\OrgEntity;

class OrgHydrator
{
    public static function hydrateCollection(array $orgs)
    {
        $hydrated = [];

        foreach ($orgs as $org) {
            $hydrated[] = self::hydrate($org);
        }

        return $hydrated;
    }

    public static function hydrate(\stdClass $org)
    {
        $hydrated = new OrgEntity();

        $hydrated->setId($org->id);
        $hydrated->setName($org->name);

        return $hydrated;
    }
}
