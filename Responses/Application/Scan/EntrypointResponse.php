<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\EntrypointEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\EntrypointHydrator;

class EntrypointResponse extends BaseResponse
{
    /** @var EntrypointEntity */
    private $entrypoint;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->entrypoint = EntrypointHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return EntrypointEntity
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }
}
