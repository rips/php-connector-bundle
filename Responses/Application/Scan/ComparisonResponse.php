<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\ComparisonEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ComparisonHydrator;

class ComparisonResponse extends BaseResponse
{
    /** @var ComparisonEntity */
    private $comparison;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->comparison = ComparisonHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ComparisonEntity
     */
    public function getComparison()
    {
        return $this->comparison;
    }
}
