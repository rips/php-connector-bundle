<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\EntrypointEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\EntrypointHydrator;

class EntrypointsResponse extends BaseResponse
{
    /** @var EntrypointEntity[] */
    private $entrypoints;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->entrypoints = EntrypointHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return EntrypointEntity[]
     */
    public function getEntrypoints()
    {
        return $this->entrypoints;
    }
}
