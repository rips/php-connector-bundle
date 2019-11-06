<?php

namespace RIPS\ConnectorBundle\Responses\User;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\User\StatisticsEntity;
use RIPS\ConnectorBundle\Hydrators\User\StatisticsHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class StatisticResponse extends BaseResponse
{
    /** @var StatisticsEntity */
    private $statistics;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->statistics = StatisticsHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return StatisticsEntity
     */
    public function getStatistics()
    {
        return $this->statistics;
    }
}
