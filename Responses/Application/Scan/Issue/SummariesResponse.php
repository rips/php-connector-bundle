<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\SummaryHydrator;

class SummariesResponse extends BaseResponse
{
    /** @var SummaryEntity[] */
    private $summaries;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->summaries = SummaryHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SummaryEntity[]
     */
    public function getSummaries()
    {
        return $this->summaries;
    }
}
