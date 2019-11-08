<?php

namespace RIPS\ConnectorBundle\Responses\History;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class ScansStatsResponse extends BaseResponse
{
    /** @var \stdClass */
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
