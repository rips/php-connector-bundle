<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;

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
