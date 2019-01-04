<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\TeamBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\TeamsResponse;
use RIPS\ConnectorBundle\Responses\TeamResponse;

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
     * @return TeamsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->teams()->getAll($queryParams);

        return new TeamsResponse($response);
    }

    /**
     * Get team by id
     *
     * @param int $teamId
     * @param array $queryParams
     * @return TeamResponse
     */
    public function getById($teamId, array $queryParams = [])
    {
        $response = $this->api->teams()->getById($teamId, $queryParams);

        return new TeamResponse($response);
    }

    /**
     * Create a new team
     *
     * @param TeamBuilder $input
     * @param array $queryParams
     * @return TeamResponse
     */
    public function create(TeamBuilder $input, array $queryParams = [])
    {
        $response = $this->api->teams()->create($input->toArray(), $queryParams);

        return new TeamResponse($response);
    }

    /**
     * Update an existing team
     *
     * @param int $teamId
     * @param TeamBuilder $input
     * @param array $queryParams
     * @return TeamResponse
     */
    public function update($teamId, TeamBuilder $input, array $queryParams = [])
    {
        $response = $this->api->teams()->update($teamId, $input->toArray(), $queryParams);

        return new TeamResponse($response);
    }

    /**
     * Delete all teams
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->teams()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete team by id
     *
     * @param int $teamId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($teamId, array $queryParams = [])
    {
        $response = $this->api->teams()->deleteById($teamId, $queryParams);

        return new BaseResponse($response);
    }
}
