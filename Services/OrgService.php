<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\OrgHydrator;
use RIPS\ConnectorBundle\InputBuilders\OrgBuilder;
use RIPS\ConnectorBundle\Entities\OrgEntity;

class OrgService
{
    /**
     * @var APIService
     */
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
     * @param array $queryParams
     * @return OrgEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $org = $this->api->orgs()->getAll($queryParams);

        return OrgHydrator::hydrateCollection($org);
    }

    /**
     * Get an organization by id
     *
     * @param int $orgId
     * @param array $queryParams
     * @return OrgEntity
     */
    public function getById($orgId, array $queryParams = [])
    {
        $org = $this->api->orgs()->getById($orgId, $queryParams);

        return OrgHydrator::hydrate($org);
    }

    /**
     * Create a new organization
     *
     * @param OrgBuilder $input
     * @param array $queryParams
     * @return OrgEntity
     */
    public function create(OrgBuilder $input, array $queryParams = [])
    {
        $org = $this->api->orgs()->create($input->toArray(), $queryParams);

        return OrgHydrator::hydrate($org);
    }

    /**
     * Update existing organization by id
     *
     * @param integer $orgId
     * @param OrgBuilder $input
     * @param array $queryParams
     * @return OrgEntity
     */
    public function update($orgId, OrgBuilder $input, array $queryParams = [])
    {
        $org = $this->api->orgs()->update($orgId, $input->toArray(), $queryParams);

        return OrgHydrator::hydrate($org);
    }

    /**
     * Delete all organizations
     *
     * @param array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->orgs()->deleteAll($queryParams);
    }

    /**
     * Delete an organization by id
     *
     * @param int $orgId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($orgId, array $queryParams = [])
    {
        $this->api->orgs()->deleteById($orgId, $queryParams);
    }
}
