<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\LogEntity;
use RIPS\ConnectorBundle\Hydrators\LogHydrator;

class LogsResponse extends BaseResponse
{
    /** @var LogEntity[] */
    private $logs;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->logs = LogHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return LogEntity[]
     */
    public function getLogs()
    {
        return $this->logs;
    }
}
