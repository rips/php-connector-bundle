<?php

namespace RIPS\ConnectorBundle\Responses\History;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\History\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\History\ScanHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class ScanResponse extends BaseResponse
{
    /** @var ScanEntity */
    private $scan;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->scan = ScanHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ScanEntity
     */
    public function getScan()
    {
        return $this->scan;
    }
}
