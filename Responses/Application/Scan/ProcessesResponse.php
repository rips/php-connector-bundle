<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ProcessHydrator;

class ProcessesResponse extends BaseResponse
{
    /** @var ProcessEntity[] */
    private $processes;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->processes = ProcessHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ProcessEntity[]
     */
    public function getProcesses()
    {
        return $this->processes;
    }
}
