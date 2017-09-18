<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\OrgHydrator;
use RIPS\ConnectorBundle\InputBuilders\OrgBuilder;
use RIPS\ConnectorBundle\Entities\OrgEntity;

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
     * Get all organizations
     *
     * @param  array $queryParams
     * @return array<OrgEntity>
     */
    public function getAll(array $queryParams = [])
    {
        $org = $this->api->orgs()->getAll($queryParams);

        return OrgHydrator::hydrateCollection($org);
    }

    /**
     * Get an organization by id
     *
     * @param  int $orgId
     * @return OrgEntity
     */
    public function getById($orgId)
    {
        $org = $this->api->orgs()->getById($orgId);

        return OrgHydrator::hydrate($org);
    }

    /**
     * Delete all organizations
     *
     * @param  array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->orgs()->deleteAll($queryParams);
    }

    /**
     * Delete an organization by id
     *
     * @param  int $orgId
     * @return void
     */
    public function deleteById($orgId)
    {
        $this->api->orgs()->deleteById($orgId);
    }

    /**
     * Update existing organization by id
     *
     * @param  integer    $orgId
     * @param  OrgBuilder $input
     * @return OrgEntity
     */
    public function update($orgId, OrgBuilder $input)
    {
        $org = $this->api->orgs()->update($orgId, $input->toArray());

        return OrgHydrator::hydrate($org);
    }

    /**
     * Create a new organization
     *
     * @param  OrgBuilder $input
     * @return OrgEntity
     */
    public function create(OrgBuilder $input)
    {
        $org = $this->api->orgs()->create($input->toArray());

        return OrgHydrator::hydrate($org);
    }
}
