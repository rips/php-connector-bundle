<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\JavaEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\JavaHydrator;

class JavasResponse extends BaseResponse
{
    /** @var JavaEntity[] */
    private $javas;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->javas = JavaHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return JavaEntity[]
     */
    public function getJavas()
    {
        return $this->javas;
    }
}
