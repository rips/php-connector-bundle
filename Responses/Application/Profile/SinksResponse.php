<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\SinkEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SinkHydrator;

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
    public function getSinks()
    {
        return $this->sinks;
    }
}
