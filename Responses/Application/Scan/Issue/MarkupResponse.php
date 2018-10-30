<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\MarkupEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\MarkupHydrator;

class MarkupResponse extends BaseResponse
{
    /** @var MarkupEntity */
    private $markup;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->markup = MarkupHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return MarkupEntity
     */
    public function getMarkup()
    {
        return $this->markup;
    }
}
