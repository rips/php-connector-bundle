<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\PitfallEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PitfallHydrator;

class PitfallsResponse extends BaseResponse
{
    /** @var PitfallEntity[] */
    private $pitfalls;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->pitfalls = PitfallHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return PitfallEntity[]
     */
    public function getPitfalls()
    {
        return $this->pitfalls;
    }
}
