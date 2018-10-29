<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\OrgHydrator;

class OrgResponse extends BaseResponse
{
    /** @var OrgEntity */
    private $org;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->org = OrgHydrator::hydrate($response->getDecodedData());
    }

    /**
     * @return OrgEntity
     */
    public function getOrg()
    {
        return $this->org;
    }
}
