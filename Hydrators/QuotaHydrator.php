<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\QuotaEntity;
use RIPS\ConnectorBundle\Hydrators\Quota\AclHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

class QuotaHydrator
{
    /**
     * Hydrate a collection of of quota objects into a collection of
     * QuotaEntity objects
     *
     * @param stdClass[] $quotas
     * @return QuotaEntity[]
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
     * @param stdClass $quota
     * @return QuotaEntity
     */
    public static function hydrate(stdClass $quota)
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
            $hydrated->setValidFrom(new DateTime($quota->valid_from));
        }

        if (isset($quota->valid_until)) {
            $hydrated->setValidUntil(new DateTime($quota->valid_until));
        }

        if (isset($quota->last_modification)) {
            $hydrated->setLastModification(new DateTime($quota->last_modification));
        }

        if (isset($quota->allowed_misses)) {
            $hydrated->setAllowedMisses($quota->allowed_misses);
        }

        if (isset($quota->public)) {
            $hydrated->setPublic($quota->public);
        }

        if (isset($quota->license)) {
            $hydrated->setLicense(LicenseHydrator::hydrate($quota->license));
        }

        if (isset($quota->scans) && is_array($quota->scans)) {
            $hydrated->setScans(ScanHydrator::hydrateCollection($quota->scans));
        }

        if (isset($quota->users) && is_array($quota->users)) {
            $hydrated->setUsers(UserHydrator::hydrateCollection($quota->users));
        }

        if (isset($quota->acls) && is_array($quota->acls)) {
            $hydrated->setAcls(AclHydrator::hydrateCollection($quota->acls));
        }

        if (isset($quota->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($quota->organization));
        }

        return $hydrated;
    }
}
