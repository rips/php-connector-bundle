<?php

namespace RIPS\ConnectorBundle\Services\Quota;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Quota\AclEntity;
use RIPS\ConnectorBundle\Hydrators\Quota\AclHydrator;
use RIPS\ConnectorBundle\InputBuilders\Quota\AclBuilder;

class AclService
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
     * Get all acls
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return AclEntity[]
     */
    public function getAll($quotaId, array $queryParams = [])
    {
        $acls = $this->api->quotas()->acls()->getAll($quotaId, $queryParams);

        return AclHydrator::hydrateCollection($acls);
    }

    /**
     * Get a acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @return AclEntity
     */
    public function getById($quotaId, $aclId)
    {
        $acl = $this->api->quotas()->acls()->getById($quotaId, $aclId);

        return AclHydrator::hydrate($acl);
    }

    /**
     * Create a new acl for a quota
     *
     * @param int $quotaId
     * @param AclBuilder $input
     * @return AclEntity
     */
    public function create($quotaId, AclBuilder $input)
    {
        $acl = $this->api->quotas()->acls()->create($quotaId, $input->toArray());

        return AclHydrator::hydrate($acl);
    }

    /**
     * Update existing acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @param AclBuilder $input
     * @return AclEntity
     */
    public function update($quotaId, $aclId, AclBuilder $input)
    {
        $acl = $this->api->quotas()->acls()->update($quotaId, $aclId, $input->toArray());

        return AclHydrator::hydrate($acl);
    }

    /**
     * Delete all acls for a quota
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($quotaId, array $queryParams = [])
    {
        $this->api->quotas()->acls()->deleteAll($quotaId, $queryParams);
    }

    /**
     * Delete acl for quota by id
     *
     * @param int $quotaId
     * @param int $quotaId
     * @return void
     */
    public function deleteById($quotaId, $aclId)
    {
        $this->api->quotas()->acls()->deleteById($quotaId, $aclId);
    }
}
