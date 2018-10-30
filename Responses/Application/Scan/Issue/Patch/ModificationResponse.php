<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Patch;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Patch\ModificationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Patch\ModificationHydrator;

class ModificationResponse extends BaseResponse
{
    /** @var ModificationEntity */
    private $modification;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->modification = ModificationHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return ModificationEntity
     */
    public function getModification()
    {
        return $this->modification;
    }
}
