<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\IgnoredCodeEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\IgnoredCodeHydrator;

class IgnoredCodesResponse extends BaseResponse
{
    /** @var IgnoredCodeEntity[] */
    private $ignoredCodes;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->ignoredCodes = IgnoredCodeHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return IgnoredCodeEntity[]
     */
    public function getIgnoredCodes()
    {
        return $this->ignoredCodes;
    }
}
