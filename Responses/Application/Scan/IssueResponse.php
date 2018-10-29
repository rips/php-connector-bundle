<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class IssueResponse extends BaseResponse
{
    /** @var IssueEntity */
    private $issue;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->issue = IssueHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return IssueEntity
     */
    public function getIssue()
    {
        return $this->issue;
    }
}
