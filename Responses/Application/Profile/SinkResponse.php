<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\SinkEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SinkHydrator;

class SinkResponse extends BaseResponse
{
    /** @var SinkEntity */
    private $sink;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sink = SinkHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SinkEntity
     */
    public function getSink()
    {
        return $this->sink;
    }
}
