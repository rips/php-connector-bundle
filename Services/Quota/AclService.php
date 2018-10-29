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
     * @param APIService $api
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

        return AclHydrator::hydrateCollection($acls->getDecodedData());
    }

    /**
     * Get a acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @param array $queryParams
     * @return AclEntity
     */
    public function getById($quotaId, $aclId, array $queryParams = [])
    {
        $acl = $this->api->quotas()->acls()->getById($quotaId, $aclId, $queryParams);

        return AclHydrator::hydrate($acl->getDecodedData());
    }

    /**
     * Create a new acl for a quota
     *
     * @param int $quotaId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclEntity
     */
    public function create($quotaId, AclBuilder $input, array $queryParams = [])
    {
        $acl = $this->api->quotas()->acls()->create($quotaId, $input->toArray(), $queryParams);

        return AclHydrator::hydrate($acl->getDecodedData());
    }

    /**
     * Update existing acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclEntity
     */
    public function update($quotaId, $aclId, AclBuilder $input, array $queryParams = [])
    {
        $acl = $this->api->quotas()->acls()->update($quotaId, $aclId, $input->toArray(), $queryParams);

        return AclHydrator::hydrate($acl->getDecodedData());
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
     * @param int $aclId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($quotaId, $aclId, array $queryParams = [])
    {
        $this->api->quotas()->acls()->deleteById($quotaId, $aclId, $queryParams);
    }
}
