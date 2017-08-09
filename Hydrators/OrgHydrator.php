<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

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

        if (isset($org->quotas) && count($org->quotas) > 0) {
            $hydrated->setQuotas(QuotaHydrator::hydrateCollection($org->quotas));
        }

        return $hydrated;
    }
}
