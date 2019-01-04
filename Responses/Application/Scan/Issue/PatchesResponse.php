<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\PatchEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\PatchHydrator;

class PatchesResponse extends BaseResponse
{
    /** @var PatchEntity[] */
    private $patches;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->patches = PatchHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return PatchEntity[]
     */
    public function getPatches()
    {
        return $this->patches;
    }
}
