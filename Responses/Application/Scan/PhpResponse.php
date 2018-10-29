<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PhpHydrator;

class PhpResponse extends BaseResponse
{
    /** @var PhpEntity */
    private $php;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->php = PhpHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return PhpEntity
     */
    public function getPhp()
    {
        return $this->php;
    }
}
