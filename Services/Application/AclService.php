<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Entities\Application\AclEntity;
use RIPS\ConnectorBundle\Hydrators\Application\AclHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\AclBuilder;

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
     * @param int $appId
     * @param array $queryParams
     * @return AclEntity[]
     */
    public function getAll($appId, array $queryParams = [])
    {
        $acls = $this->api->applications()->acls()->getAll($appId, $queryParams);

        return AclHydrator::hydrateCollection($acls);
    }

    /**
     * Get a acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @return AclEntity
     */
    public function getById($appId, $aclId)
    {
        $acl = $this->api->applications()->acls()->getById($appId, $aclId);

        return AclHydrator::hydrate($acl);
    }

    /**
     * Create a new acl for a application
     *
     * @param int $appId
     * @param AclBuilder $input
     * @return AclEntity
     */
    public function create($appId, AclBuilder $input)
    {
        $acl = $this->api->applications()->acls()->create($appId, $input->toArray());

        return AclHydrator::hydrate($acl);
    }

    /**
     * Update existing acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @param AclBuilder $input
     * @return AclEntity
     */
    public function update($appId, $aclId, AclBuilder $input)
    {
        $acl = $this->api->applications()->acls()->update($appId, $aclId, $input->toArray());

        return AclHydrator::hydrate($acl);
    }

    /**
     * Delete all acls for a application
     *
     * @param int $appId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $this->api->applications()->acls()->deleteAll($appId, $queryParams);
    }

    /**
     * Delete acl for application by id
     *
     * @param int $appId
     * @param int $appId
     * @return void
     */
    public function deleteById($appId, $aclId)
    {
        $this->api->applications()->acls()->deleteById($appId, $aclId);
    }
}
