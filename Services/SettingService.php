<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\SettingBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\SettingsResponse;
use RIPS\ConnectorBundle\Responses\SettingResponse;

class SettingService
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
     * Get all settings
     *
     * @param array $queryParams
     * @return SettingsResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->settings()->getAll($queryParams);

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
        $response = $this->api->settings()->getByKey($key, $queryParams);

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
        $response = $this->api->settings()->createOrUpdate($key, $input->toArray(), $queryParams);

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
        $response = $this->api->settings()->deleteAll($queryParams);

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
        $response = $this->api->settings()->deleteByKey($key, $queryParams);

        return new BaseResponse($response);
    }
}
