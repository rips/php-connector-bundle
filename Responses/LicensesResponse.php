<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\LicenseEntity;
use RIPS\ConnectorBundle\Hydrators\LicenseHydrator;

class LicensesResponse extends BaseResponse
{
    /** @var LicenseEntity[] */
    private $licenses;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->licenses = LicenseHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return LicenseEntity[]
     */
    public function getLicenses()
    {
        return $this->licenses;
    }
}
