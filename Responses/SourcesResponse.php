<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;

class SourcesResponse extends BaseResponse
{
    /** @var \stdClass[] */
    private $sources;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sources = $response->getDecodedData();
    }

    /**
     * @return \stdClass[]
     */
    public function getSources()
    {
        return $this->sources;
    }
}
