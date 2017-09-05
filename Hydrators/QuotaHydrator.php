<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\QuotaEntity;
use RIPS\ConnectorBundle\Hydrators\OrgHydrator;

class QuotaHydrator
{
    /**
     * Hydrate a collection of of quota objects into a collection of
     * QuotaEntity objects
     *
     * @param  array<\stdClass> $quotas
     * @return array<QuotaEntity>
     */
    public static function hydrateCollection(array $quotas)
    {
        $hydrated = [];

        foreach ($quotas as $quota) {
            $hydrated[] = self::hydrate($quota);
        }

        return $hydrated;
    }

    /**
     * Hydrate a quota object into a QuotaEntity object
     *
     * @param  \stdClass $quota
     * @return QuotaEntity
     */
    public static function hydrate(\stdClass $quota)
    {
        $hydrated = new QuotaEntity();

        if (isset($quota->id)) {
            $hydrated->setId($quota->id);
        }

        if (isset($quota->current_application)) {
            $hydrated->setCurrentApplication($quota->current_application);
        }

        if (isset($quota->current_scan)) {
            $hydrated->setCurrentScan($quota->current_scan);
        }

        if (isset($quota->current_user)) {
            $hydrated->setCurrentUser($quota->current_user);
        }

        if (isset($quota->max_applications)) {
            $hydrated->setMaxApplications($quota->max_applications);
        }

        if (isset($quota->max_scans)) {
            $hydrated->setMaxScans($quota->max_scans);
        }

        if (isset($quota->max_users)) {
            $hydrated->setMaxUsers($quota->max_users);
        }

        if (isset($quota->max_loc)) {
            $hydrated->setMaxLoc($quota->max_loc);
        }

        if (isset($quota->valid_from)) {
            $hydrated->setValidFrom($quota->valid_from);
        }

        if (isset($quota->valid_until)) {
            $hydrated->setValidUntil($quota->valid_until);
        }

        if (isset($quota->public)) {
            $hydrated->setPublic($quota->public);
        }

        if (isset($quota->organisation)) {
            $hydrated->setOrg(OrgHydrator::hydrate($quota->organisation));
        }

        if (isset($quota->notify)) {
            $hydrated->setNotify($quota->notify);
        }

        return $hydrated;
    }
}
