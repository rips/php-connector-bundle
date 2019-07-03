<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use stdClass;
use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class ScanStatsResponse extends BaseResponse
{
    /** @var stdClass */
    private $stats;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->stats = $response->getDecodedData();
    }

    /**
     * @return stdClass
     */
    public function getStats()
    {
        return $this->stats;
    }
}
