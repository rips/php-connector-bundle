<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\PitfallEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\PitfallHydrator;

class PitfallResponse extends BaseResponse
{
    /** @var PitfallEntity */
    private $pitfall;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->pitfall = PitfallHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return PitfallEntity
     */
    public function getPitfall()
    {
        return $this->pitfall;
    }
}
