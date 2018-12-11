<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoredLocationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoredLocationHydrator;

class IgnoredLocationsResponse extends BaseResponse
{
    /** @var IgnoredLocationEntity[] */
    private $ignoredLocations;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ignoredLocations = IgnoredLocationHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return IgnoredLocationEntity[]
     */
    public function getIgnoredLocations()
    {
        return $this->ignoredLocations;
    }
}
