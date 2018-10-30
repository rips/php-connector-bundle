<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class IssuesResponse extends BaseResponse
{
    /** @var IssueEntity[] */
    private $issues;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->issues = IssueHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return IssueEntity[]
     */
    public function getIssues()
    {
        return $this->issues;
    }
}
