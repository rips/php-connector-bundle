<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\OrgHydrator;

class OrgService
{
    // @var API
    protected $api;

    /**
     * Initialize new OrgService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get an organization by id
     *
     * @param int $orgId
     * @return
     */
    public function getById(int $orgId)
    {
        $org = $this->api->orgs()->getById($orgId);

        return OrgHydrator::hydrate($org);
    }
}
