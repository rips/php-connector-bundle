<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\ConcatEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\ConcatHydrator;

class ConcatsResponse extends BaseResponse
{
    /** @var ConcatEntity[] */
    private $concats;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->concats = ConcatHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ConcatEntity[]
     */
    public function getConcats()
    {
        return $this->concats;
    }
}
