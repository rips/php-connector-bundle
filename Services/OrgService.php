<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\OrgHydrator;
use RIPS\ConnectorBundle\InputBuilders\OrgBuilder;

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

    /**
     * Update existing organization by id
     *
     * @param integer $orgId
     * @param OrgBuilder $input
     * @return OrgEntity
     */
    public function update(int $orgId, OrgBuilder $input)
    {
        $org = $this->api->orgs()->update($orgId, $input);

        return OrgHydrator::hydrate($org);
    }

    /**
     * Create a new organization
     *
     * @param OrgBuilder $input
     * @return OrgEntity
     */
    public function create(OrgBuilder $input)
    {
        $org = $this->api->orgs()->create($input->toArray());

        return OrgHydrator::hydrate($org);
    }
}
