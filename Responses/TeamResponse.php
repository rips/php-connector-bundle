<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\TeamEntity;
use RIPS\ConnectorBundle\Hydrators\TeamHydrator;

class TeamResponse extends BaseResponse
{
    /** @var TeamEntity */
    private $team;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->team = TeamHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return TeamEntity
     */
    public function getTeam()
    {
        return $this->team;
    }
}
