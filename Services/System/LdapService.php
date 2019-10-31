<?php

namespace RIPS\ConnectorBundle\Services\System;

use RIPS\ConnectorBundle\InputBuilders\System\LdapBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\System\LdapResponse;
use RIPS\ConnectorBundle\Services\APIService;

class LdapService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new LdapService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get LDAP settings
     *
     * @param array $queryParams
     * @return LdapResponse
     */
    public function get(array $queryParams = [])
    {
        $response = $this->api->systems()->ldap()->get($queryParams);

        return new LdapResponse($response);
    }

    /**
     * Update LDAP settings
     *
     * @param LdapBuilder $input
     * @param array $queryParams
     * @return LdapResponse
     */
    public function update(LdapBuilder $input, array $queryParams = [])
    {
        $response = $this->api->systems()->ldap()->update($input->toArray(), $queryParams);

        return new LdapResponse($response);
    }

    /**
     * Synchronize users with LDAP directory
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function sync(array $queryParams = [])
    {
        $response = $this->api->systems()->ldap()->sync($queryParams);

        return new BaseResponse($response);
    }
}
