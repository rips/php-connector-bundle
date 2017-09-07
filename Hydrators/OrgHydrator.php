<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

class OrgHydrator
{
    /**
     * Hydrate a collection of org objects into a collection of
     * OrgEntity objects
     *
     * @param  \stdClass[] $orgs
     * @return OrgEntity[]
     */
    public static function hydrateCollection(array $orgs)
    {
        $hydrated = [];

        foreach ($orgs as $org) {
            $hydrated[] = self::hydrate($org);
        }

        return $hydrated;
    }

    /**
     * Hydrate a single org object into a OrgEntity object
     *
     * @param  \stdClass $org
     * @return OrgEntity
     */
    public static function hydrate(\stdClass $org)
    {
        $hydrated = new OrgEntity();

        if (isset($org->id)) {
            $hydrated->setId($org->id);
        }

        if (isset($org->name)) {
            $hydrated->setName($org->name);
        }

        if (isset($org->valid_until)) {
            $hydrated->setValidUntil($org->valid_until);
        }

        if (isset($org->quotas) && count($org->quotas) > 0) {
            $hydrated->setQuotas(QuotaHydrator::hydrateCollection($org->quotas));
        }

        return $hydrated;
    }
}
