<?php

namespace RIPS\ConnectorBundle\Responses\Application\Profile;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Profile\SourceEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Profile\SourceHydrator;

class SourcesResponse extends BaseResponse
{
    /** @var SourceEntity[] */
    private $sources;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->sources = SourceHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return SourceEntity[]
     */
    public function getSources()
    {
        return $this->sources;
    }
}
