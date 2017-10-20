<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\OrgEntity;

class OrgHydrator
{
    /**
     * Hydrate a collection of organisation objects into a collection of
     * OrgEntity objects
     *
     * @param stdClass[] $organisations
     * @return OrgEntity[]
     */
    public static function hydrateCollection(array $organisations)
    {
        $hydrated = [];

        foreach ($organisations as $organisation) {
            $hydrated[] = self::hydrate($organisation);
        }

        return $hydrated;
    }

    /**
     * Hydrate a organisation object into a OrgEntity object
     *
     * @param stdClass $organisation
     * @return OrgEntity
     */
    public static function hydrate(stdClass $organisation)
    {
        $hydrated = new OrgEntity();

        if (isset($organisation->id)) {
            $hydrated->setId($organisation->id);
        }

        if (isset($organisation->name)) {
            $hydrated->setName($organisation->name);
        }

        if (isset($organisation->valid_until)) {
            $hydrated->setValidUntil(new DateTime($organisation->valid_until));
        }

        if (isset($organisation->users) && is_array($organisation->users)) {
            $hydrated->setUsers(UserHydrator::hydrateCollection($organisation->users));
        }

        if (isset($organisation->teams) && is_array($organisation->teams)) {
            $hydrated->setTeams(TeamHydrator::hydrateCollection($organisation->teams));
        }

        if (isset($organisation->applications) && is_array($organisation->applications)) {
            $hydrated->setApplications(ApplicationHydrator::hydrateCollection($organisation->applications));
        }

        if (isset($organisation->quotas) && is_array($organisation->quotas)) {
            $hydrated->setQuotas(QuotaHydrator::hydrateCollection($organisation->quotas));
        }

        if (isset($organisation->licenses) && is_array($organisation->licenses)) {
            $hydrated->setLicenses(LicenseHydrator::hydrateCollection($organisation->licenses));
        }

        if (isset($organisation->logs) && is_array($organisation->logs)) {
            $hydrated->setLogs(LogHydrator::hydrateCollection($organisation->logs));
        }

        if (isset($organisation->callbacks)) {
            $hydrated->setCallbacks($organisation->callbacks);
        }

        return $hydrated;
    }
}
