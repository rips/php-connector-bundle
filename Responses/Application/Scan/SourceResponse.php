<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\SourceHydrator;

class SourceResponse extends BaseResponse
{
    /** @var SourceEntity */
    private $source;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->source = SourceHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SourceEntity
     */
    public function getSource()
    {
        return $this->source;
    }
}
