<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PhpHydrator;

class PhpsResponse extends BaseResponse
{
    /** @var PhpEntity[] */
    private $phps;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->phps = PhpHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return PhpEntity[]
     */
    public function getPhps()
    {
        return $this->phps;
    }
}
