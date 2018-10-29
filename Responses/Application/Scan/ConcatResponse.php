<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\ConcatEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ConcatHydrator;

class ConcatResponse extends BaseResponse
{
    /** @var ConcatEntity */
    private $concat;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->concat = ConcatHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ConcatEntity
     */
    public function getConcat()
    {
        return $this->concat;
    }
}
