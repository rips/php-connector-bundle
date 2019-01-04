<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\JavaEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\JavaHydrator;

class JavaResponse extends BaseResponse
{
    /** @var JavaEntity */
    private $java;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->java = JavaHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return JavaEntity
     */
    public function getJava()
    {
        return $this->java;
    }
}
