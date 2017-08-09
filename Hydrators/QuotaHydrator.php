<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Entities\QuotaEntity;

class QuotaHydrator
{
    public static function hydrateCollection(array $quotas)
    {
        $hydrated = [];

        foreach ($quotas as $quota) {
            $hydrated[] = self::hydrate($quota);
        }

        return $hydrated;
    }

    public static function hydrate(\stdClass $quota)
    {
        $hydrated = new QuotaEntity();

        $hydrated->setId($quota->id);
        $hydrated->setCurrentApplication($quota->current_application);
        $hydrated->setCurrentScan($quota->current_scan);
        $hydrated->setCurrentUser($quota->current_user);
        $hydrated->setMaxApplications($quota->max_applications);
        $hydrated->setMaxScans($quota->max_scans);
        $hydrated->setMaxUsers($quota->max_users);
        $hydrated->setValidFrom($quota->valid_from);
        $hydrated->setValidUntil($quota->valid_until);
        $hydrated->setPublic($quota->public);

        return $hydrated;
    }
}
