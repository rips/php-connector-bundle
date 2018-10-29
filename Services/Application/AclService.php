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
     * @param APIService $api
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

        return AclHydrator::hydrateCollection($acls->getDecodedData());
    }

    /**
     * Get a acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @param array $queryParams
     * @return AclEntity
     */
    public function getById($appId, $aclId, array $queryParams = [])
    {
        $acl = $this->api->applications()->acls()->getById($appId, $aclId, $queryParams);

        return AclHydrator::hydrate($acl->getDecodedData());
    }

    /**
     * Create a new acl for a application
     *
     * @param int $appId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclEntity
     */
    public function create($appId, AclBuilder $input, array $queryParams = [])
    {
        $acl = $this->api->applications()->acls()->create($appId, $input->toArray(), $queryParams);

        return AclHydrator::hydrate($acl->getDecodedData());
    }

    /**
     * Update existing acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclEntity
     */
    public function update($appId, $aclId, AclBuilder $input, array $queryParams = [])
    {
        $acl = $this->api->applications()->acls()->update($appId, $aclId, $input->toArray(), $queryParams);

        return AclHydrator::hydrate($acl->getDecodedData());
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
     * @param int $aclId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $aclId, array $queryParams = [])
    {
        $this->api->applications()->acls()->deleteById($appId, $aclId, $queryParams);
    }
}
