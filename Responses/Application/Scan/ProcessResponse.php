<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ProcessHydrator;

class ProcessResponse extends BaseResponse
{
    /** @var ProcessEntity */
    private $process;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->process = ProcessHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ProcessEntity
     */
    public function getProcess()
    {
        return $this->process;
    }
}
