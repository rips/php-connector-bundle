<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Entities\TeamEntity;
use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\TeamHydrator;
use RIPS\ConnectorBundle\InputBuilders\Team\InviteBuilder;
use RIPS\ConnectorBundle\InputBuilders\TeamBuilder;

class TeamService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new TeamService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all teams
     *
     * @param array $queryParams
     * @return TeamEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $teams = $this->api->teams()->getAll($queryParams);

        return TeamHydrator::hydrateCollection($teams);
    }

    /**
     * Get team by id
     *
     * @param int $teamId
     * @return TeamEntity
     */
    public function getById($teamId)
    {
        $team = $this->api->teams()->getById($teamId);

        return TeamHydrator::hydrate($team);
    }

    /**
     * Create a new team
     *
     * @param TeamBuilder $input
     * @return TeamEntity
     */
    public function create(TeamBuilder $input)
    {
        $team = $this->api->teams()->create($input->toArray());

        return TeamHydrator::hydrate($team);
    }

    /**
     * Update an existing team
     *
     * @param int $teamId
     * @param TeamBuilder $input
     * @return TeamEntity
     */
    public function update($teamId, TeamBuilder $input)
    {
        $team = $this->api->teams()->update($teamId, $input->toArray());

        return TeamHydrator::hydrate($team);
    }

    /**
     * Delete all teams
     *
     * @param array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->teams()->deleteAll($queryParams);
    }

    /**
     * Delete team by id
     *
     * @param int $teamId
     * @return void
     */
    public function deleteById($teamId)
    {
        $this->api->teams()->deleteById($teamId);
    }
}
