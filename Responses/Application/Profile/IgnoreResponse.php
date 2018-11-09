<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoreEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoreHydrator;

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
