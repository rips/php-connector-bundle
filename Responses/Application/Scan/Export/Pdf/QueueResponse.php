<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Export\Pdf;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\Application\Scan\Export\Pdf\QueueEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Export\Pdf\QueueHydrator;
use RIPS\ConnectorBundle\Responses\BaseResponse;

class QueueResponse extends BaseResponse
{
    /** @var QueueEntity */
    private $queue;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->queue = QueueHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return QueueEntity
     */
    public function getQueue()
    {
        return $this->queue;
    }
}
