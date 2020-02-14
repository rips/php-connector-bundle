<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\Org\InvitationBuilder;
use RIPS\ConnectorBundle\InputBuilders\OrgBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\OrgsResponse;
use RIPS\ConnectorBundle\Responses\OrgResponse;

class OrgService
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
     * Get all organizations
     *
     * @param array $queryParams
     * @return OrgsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->orgs()->getAll($queryParams);

        return new OrgsResponse($response);
    }

    /**
     * Get an organization by id
     *
     * @param int $orgId
     * @param array $queryParams
     * @return OrgResponse
     */
    public function getById($orgId, array $queryParams = [])
    {
        $response = $this->api->orgs()->getById($orgId, $queryParams);

        return new OrgResponse($response);
    }

    /**
     * Create a new organization
     *
     * @param OrgBuilder $input
     * @param array $queryParams
     * @return OrgResponse
     */
    public function create(OrgBuilder $input, array $queryParams = [])
    {
        $response = $this->api->orgs()->create($input->toArray(), $queryParams);

        return new OrgResponse($response);
    }

    /**
     * Update existing organization by id
     *
     * @param integer $orgId
     * @param OrgBuilder $input
     * @param array $queryParams
     * @return OrgResponse
     */
    public function update($orgId, OrgBuilder $input, array $queryParams = [])
    {
        $response = $this->api->orgs()->update($orgId, $input->toArray(), $queryParams);

        return new OrgResponse($response);
    }

    /**
     * Delete all organizations
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->orgs()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete an organization by id
     *
     * @param int $orgId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($orgId, array $queryParams = [])
    {
        $response = $this->api->orgs()->deleteById($orgId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Invite a new organization for trial.
     *
     * @param InvitationBuilder $input
     * @param array $queryParams
     * @return BaseResponse
     */
    public function invite(InvitationBuilder $input, array $queryParams = [])
    {
        $response = $this->api->orgs()->invite($input->toArray(), $queryParams);

        return new BaseResponse($response);
    }
}
