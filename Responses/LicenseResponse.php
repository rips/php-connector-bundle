<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\LicenseEntity;
use RIPS\ConnectorBundle\Hydrators\LicenseHydrator;

class LicenseResponse extends BaseResponse
{
    /** @var LicenseEntity */
    private $license;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->license = LicenseHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return LicenseEntity
     */
    public function getLicense()
    {
        return $this->license;
    }
}
