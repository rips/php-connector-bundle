<?php

namespace RIPS\ConnectorBundle\Hydrators;

use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\TypeHydrator;
use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\QuotaEntity;

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

        if (isset($quota->allowed_misses)) {
            $hydrated->setAllowedMisses($quota->allowed_misses);
        }

        if (isset($quota->public)) {
            $hydrated->setPublic($quota->public);
        }

        if (isset($quota->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($quota->organization));
        }

        if (isset($quota->created_at)) {
            $hydrated->setCreatedAt(new DateTime($quota->created_at));
        }

        if (isset($quota->languages) && is_array($quota->languages)) {
            $hydrated->setLanguages(LanguageHydrator::hydrateCollection($quota->languages));
        }

        if (isset($quota->notify)) {
            $hydrated->setNotify($quota->notify);
        }

        if (isset($quota->trial_issue_types) && is_array($quota->trial_issue_types)) {
            $hydrated->setTrialIssueTypes(TypeHydrator::hydrateCollection($quota->trial_issue_types));
        }

        if (isset($quota->issue_type_limit)) {
            $hydrated->setIssueTypeLimit($quota->issue_type_limit);
        }

        if (isset($quota->update_only)) {
            $hydrated->setUpdateOnly($quota->update_only);
        }

        return $hydrated;
    }
}
