<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

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
