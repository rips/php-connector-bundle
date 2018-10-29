<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\AclBuilder;
use RIPS\ConnectorBundle\Responses\Application\AclsResponse;
use RIPS\ConnectorBundle\Responses\Application\AclResponse;

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
     * @return AclsResponse
     */
    public function getAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->acls()->getAll($appId, $queryParams);

        return new AclsResponse($response);
    }

    /**
     * Get a acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @param array $queryParams
     * @return AclResponse
     */
    public function getById($appId, $aclId, array $queryParams = [])
    {
        $response = $this->api->applications()->acls()->getById($appId, $aclId, $queryParams);

        return new AclResponse($response);
    }

    /**
     * Create a new acl for a application
     *
     * @param int $appId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclResponse
     */
    public function create($appId, AclBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->acls()->create($appId, $input->toArray(), $queryParams);

        return new AclResponse($response);
    }

    /**
     * Update existing acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclResponse
     */
    public function update($appId, $aclId, AclBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->acls()->update($appId, $aclId, $input->toArray(), $queryParams);

        return new AclResponse($response);
    }

    /**
     * Delete all acls for a application
     *
     * @param int $appId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $response = $this->api->applications()->acls()->deleteAll($appId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete acl for application by id
     *
     * @param int $appId
     * @param int $aclId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $aclId, array $queryParams = [])
    {
        $response = $this->api->applications()->acls()->deleteById($appId, $aclId, $queryParams);

        return new BaseResponse($response);
    }
}
