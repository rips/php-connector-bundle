<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\SinkEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SinkHydrator;

class SinksResponse extends BaseResponse
{
    /** @var SinkEntity[] */
    private $sinks;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sinks = SinkHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SinkEntity[]
     */
    public function getSink()
    {
        return $this->sinks;
    }
}
