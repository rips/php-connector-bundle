<?php

namespace RIPS\ConnectorBundle\Responses\Application;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Entities\Application\AclEntity;
use RIPS\ConnectorBundle\Hydrators\Application\AclHydrator;

class AclsResponse extends BaseResponse
{
    /** @var AclEntity[] */
    private $acls;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->acls = AclHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return AclEntity[]
     */
    public function getAcls()
    {
        return $this->acls;
    }
}
