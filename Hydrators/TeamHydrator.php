<?php

namespace RIPS\ConnectorBundle\Hydrators;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\TeamEntity;
use RIPS\ConnectorBundle\Hydrators\Application\AclHydrator as ApplicationAclHydrator;
use RIPS\ConnectorBundle\Hydrators\Quota\AclHydrator as QuotaAclHydrator;

class TeamHydrator
{
    /**
     * Hydrate a collection of team objects into a collection of
     * TeamEntity objects
     *
     * @param stdClass[] $teams
     * @return TeamEntity[]
     */
    public static function hydrateCollection(array $teams)
    {
        $hydrated = [];

        foreach ($teams as $team) {
            $hydrated[] = self::hydrate($team);
        }

        return $hydrated;
    }

    /**
     * Hydrate a team object into a TeamEntity object
     *
     * @param stdClass $team
     * @return TeamEntity
     */
    public static function hydrate(stdClass $team)
    {
        $hydrated = new TeamEntity();

        if (isset($team->id)) {
            $hydrated->setId($team->id);
        }

        if (isset($team->name)) {
            $hydrated->setName($team->name);
        }

        if (isset($team->organization)) {
            $hydrated->setOrganization(OrgHydrator::hydrate($team->organization));
        }

        if (isset($team->users) && is_array($team->users)) {
            $hydrated->setUsers(UserHydrator::hydrateCollection($team->users));
        }

        if (isset($team->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($team->created_by));
        }

        if (isset($team->created_at)) {
            $hydrated->setCreatedAt(new DateTime($team->created_at));
        }

        return $hydrated;
    }
}
