<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\OrgEntity;

class OrgHydrator
{
    /**
     * Hydrate a collection of organization objects into a collection of
     * OrgEntity objects
     *
     * @param stdClass[] $organizations
     * @return OrgEntity[]
     */
    public static function hydrateCollection(array $organizations)
    {
        $hydrated = [];

        foreach ($organizations as $organization) {
            $hydrated[] = self::hydrate($organization);
        }

        return $hydrated;
    }

    /**
     * Hydrate a organization object into a OrgEntity object
     *
     * @param stdClass $organization
     * @return OrgEntity
     */
    public static function hydrate(stdClass $organization)
    {
        $hydrated = new OrgEntity();

        if (isset($organization->id)) {
            $hydrated->setId($organization->id);
        }

        if (isset($organization->name)) {
            $hydrated->setName($organization->name);
        }

        if (isset($organization->valid_until)) {
            $hydrated->setValidUntil(new DateTime($organization->valid_until));
        }

        if (isset($organization->quotas) && is_array($organization->quotas)) {
            $hydrated->setQuotas(QuotaHydrator::hydrateCollection($organization->quotas));
        }

        if (isset($organization->trial_issue_types)) {
            $hydrated->setTrialIssueTypes($organization->trial_issue_types);
        }

        if (isset($organization->disabled)) {
            $hydrated->setDisabled($organization->disabled);
        }

        return $hydrated;
    }
}
