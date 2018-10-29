<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\MarkupEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;

class MarkupsResponse extends BaseResponse
{
    /** @var MarkupEntity[] */
    private $markups;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->markups = MarkupHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return MarkupEntity[]
     */
    public function getMarkups()
    {
        return $this->markups;
    }
}
