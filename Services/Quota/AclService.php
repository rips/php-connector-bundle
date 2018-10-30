<?php

namespace RIPS\ConnectorBundle\Services\Quota;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Quota\AclBuilder;
use RIPS\ConnectorBundle\Responses\Quota\AclsResponse;
use RIPS\ConnectorBundle\Responses\Quota\AclResponse;

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
     * @return AclsResponse
     */
    public function getAll($quotaId, array $queryParams = [])
    {
        $response = $this->api->quotas()->acls()->getAll($quotaId, $queryParams);

        return new AclsResponse($response);
    }

    /**
     * Get a acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @param array $queryParams
     * @return AclResponse
     */
    public function getById($quotaId, $aclId, array $queryParams = [])
    {
        $response = $this->api->quotas()->acls()->getById($quotaId, $aclId, $queryParams);

        return new AclResponse($response);
    }

    /**
     * Create a new acl for a quota
     *
     * @param int $quotaId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclResponse
     */
    public function create($quotaId, AclBuilder $input, array $queryParams = [])
    {
        $response = $this->api->quotas()->acls()->create($quotaId, $input->toArray(), $queryParams);

        return new AclResponse($response);
    }

    /**
     * Update existing acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @param AclBuilder $input
     * @param array $queryParams
     * @return AclResponse
     */
    public function update($quotaId, $aclId, AclBuilder $input, array $queryParams = [])
    {
        $response = $this->api->quotas()->acls()->update($quotaId, $aclId, $input->toArray(), $queryParams);

        return new AclResponse($response);
    }

    /**
     * Delete all acls for a quota
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($quotaId, array $queryParams = [])
    {
        $response = $this->api->quotas()->acls()->deleteAll($quotaId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete acl for quota by id
     *
     * @param int $quotaId
     * @param int $aclId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($quotaId, $aclId, array $queryParams = [])
    {
        $response = $this->api->quotas()->acls()->deleteById($quotaId, $aclId, $queryParams);

        return new BaseResponse($response);
    }
}
