<?php

namespace RIPS\ConnectorBundle\Responses\History;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\History\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\History\ScanHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class ScansResponse extends BaseResponse
{
    /** @var ScanEntity[] */
    private $scans;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->scans = ScanHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ScanEntity[]
     */
    public function getScans()
    {
        return $this->scans;
    }
}
