<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use RIPS\ConnectorBundle\Entities\StatusEntity;

class StatusHydrator
{
    /**
     * Hydrate a status object into a StatusEntity
     *
     * @param \stdClass $status
     * @return StatusEntity
     */
    public static function hydrate(stdClass $status)
    {
        $hydrated = new StatusEntity();

        if (isset($status->version)) {
            $hydrated->setVersion($status->version);
        }

        if (isset($status->cloud)) {
            $hydrated->setCloud($status->cloud);
        }

        if (isset($status->maintenance)) {
            $hydrated->setMaintenance($status->maintenance);
        }

        if (isset($status->hardware_id)) {
            $hydrated->setHardwareId($status->hardware_id);
        }

        if (isset($status->census)) {
            $hydrated->setCensus(CensusHydrator::hydrate($status->census));
        }

        if (isset($status->trial_issue_types) && is_array($status->trial_issue_types)) {
            $hydrated->setTrialIssueTypes($status->trial_issue_types);
        }

        if (isset($status->user)) {
            $hydrated->setUser(UserHydrator::hydrate($status->user));
        }

        if (isset($status->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($status->organization));
        }

        return $hydrated;
    }
}
