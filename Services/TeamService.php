<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\TeamHydrator;
use RIPS\ConnectorBundle\InputBuilders\TeamBuilder;
use RIPS\ConnectorBundle\Entities\TeamEntity;

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

        return TeamHydrator::hydrateCollection($teams->getDecodedData());
    }

    /**
     * Get team by id
     *
     * @param int $teamId
     * @param array $queryParams
     * @return TeamEntity
     */
    public function getById($teamId, array $queryParams = [])
    {
        $team = $this->api->teams()->getById($teamId, $queryParams);

        return TeamHydrator::hydrate($team->getDecodedData());
    }

    /**
     * Create a new team
     *
     * @param TeamBuilder $input
     * @param array $queryParams
     * @return TeamEntity
     */
    public function create(TeamBuilder $input, array $queryParams = [])
    {
        $team = $this->api->teams()->create($input->toArray(), $queryParams);

        return TeamHydrator::hydrate($team->getDecodedData());
    }

    /**
     * Update an existing team
     *
     * @param int $teamId
     * @param TeamBuilder $input
     * @param array $queryParams
     * @return TeamEntity
     */
    public function update($teamId, TeamBuilder $input, array $queryParams = [])
    {
        $team = $this->api->teams()->update($teamId, $input->toArray(), $queryParams);

        return TeamHydrator::hydrate($team->getDecodedData());
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
     * @param array $queryParams
     * @return void
     */
    public function deleteById($teamId, array $queryParams = [])
    {
        $this->api->teams()->deleteById($teamId, $queryParams);
    }
}
