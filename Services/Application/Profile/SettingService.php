<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\SettingBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\SettingResponse;

class SettingService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SettingService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get settings for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return SettingResponse
     */
    public function get($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->settings()->get($appId, $profileId, $queryParams);

        return new SettingResponse($response);
    }

    /**
     * Update settings for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param SettingBuilder $input
     * @param array $queryParams
     * @return SettingResponse
     */
    public function update($appId, $profileId, SettingBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->settings()->update($appId, $profileId, $input->toArray(), $queryParams);

        return new SettingResponse($response);
    }
}
