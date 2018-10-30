<?php

namespace RIPS\ConnectorBundle\Responses\Application\Custom;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Custom\IgnoreEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\IgnoreHydrator;

class IgnoreResponse extends BaseResponse
{
    /** @var IgnoreEntity */
    private $ignore;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ignore = IgnoreHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return IgnoreEntity
     */
    public function getIgnore()
    {
        return $this->ignore;
    }
}
