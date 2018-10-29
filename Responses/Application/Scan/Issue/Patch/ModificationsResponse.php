<?php

namespace RIPS\ConnectorBundle\Responses\Application\Scan\Issue\Patch;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Patch\ModificationEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\Patch\ModificationHydrator;

class ModificationsResponse extends BaseResponse
{
    /** @var ModificationEntity[] */
    private $modifications;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->modifications = ModificationHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return ModificationEntity[]
     */
    public function getModifications()
    {
        return $this->modifications;
    }
}
