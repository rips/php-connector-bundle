<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Type;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type\PatchEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Type\PatchHydrator;

class PatchResponse extends BaseResponse
{
    /** @var PatchEntity */
    private $patch;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->patch = PatchHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return PatchEntity
     */
    public function getPatch()
    {
        return $this->patch;
    }
}
