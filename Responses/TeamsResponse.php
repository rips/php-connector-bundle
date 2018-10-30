<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\TeamEntity;
use RIPS\ConnectorBundle\Hydrators\TeamHydrator;

class TeamsResponse extends BaseResponse
{
    /** @var TeamEntity[] */
    private $teams;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->teams = TeamHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return TeamEntity[]
     */
    public function getTeams()
    {
        return $this->teams;
    }
}
