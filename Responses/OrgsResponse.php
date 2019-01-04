<?php

namespace RIPS\ConnectorBundle\Responses;

use RIPS\Connector\Entities\Response;
use RIPS\ConnectorBundle\Entities\OrgEntity;
use RIPS\ConnectorBundle\Hydrators\OrgHydrator;

class OrgsResponse extends BaseResponse
{
    /** @var OrgEntity[] */
    private $orgs;

    /**
     * @param Response $response
     */
    public function __construct(Response $response)
    {
        parent::__construct($response);
        $this->orgs = OrgHydrator::hydrateCollection($response->getDecodedData());
    }

    /**
     * @return OrgEntity[]
     */
    public function getOrgs()
    {
        return $this->orgs;
    }
}
