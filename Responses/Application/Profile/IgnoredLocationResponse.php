<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoredLocationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoredLocationHydrator;

class IgnoredLocationResponse extends BaseResponse
{
    /** @var IgnoredLocationEntity */
    private $ignoredLocation;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ignoredLocation = IgnoredLocationHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return IgnoredLocationEntity
     */
    public function getIgnoredLocation()
    {
        return $this->ignoredLocation;
    }
}
