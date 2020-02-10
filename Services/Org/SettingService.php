<?php

namespace RIPS\ConnectorBundle\Services\Org;

use RIPS\ConnectorBundle\InputBuilders\Org\SettingBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\Org\SettingResponse;
use RIPS\ConnectorBundle\Responses\Org\SettingsResponse;
use RIPS\ConnectorBundle\Services\APIService;

class SettingService
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
     * Get all settings
     *
     * @param array $queryParams
     * @return SettingsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->orgs()->settings()->getAll($queryParams);

        return new SettingsResponse($response);
    }

    /**
     * Get a quota by id
     *
     * @param string $key
     * @param array $queryParams
     * @return SettingResponse
     */
    public function getByKey($key, array $queryParams = [])
    {
        $response = $this->api->orgs()->settings()->getByKey($key, $queryParams);

        return new SettingResponse($response);
    }

    /**
     * Create or update a quota
     *
     * @param string $key
     * @param SettingBuilder $input
     * @param array $queryParams
     * @return SettingResponse
     */
    public function createOrUpdate($key, SettingBuilder $input, array $queryParams = [])
    {
        $response = $this->api->orgs()->settings()->createOrUpdate($key, $input->toArray(), $queryParams);

        return new SettingResponse($response);
    }

    /**
     * Delete all settings
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->orgs()->settings()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete quota by id
     *
     * @param string $key
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteByKey($key, array $queryParams = [])
    {
        $response = $this->api->orgs()->settings()->deleteByKey($key, $queryParams);

        return new BaseResponse($response);
    }
}
