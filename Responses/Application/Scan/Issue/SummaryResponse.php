<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummaryHydrator;

class SummaryResponse extends BaseResponse
{
    /** @var SummaryEntity */
    private $summary;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->summary = SummaryHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return SummaryEntity
     */
    public function getSummary()
    {
        return $this->summary;
    }
}
