<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SettingHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SettingBuilder;
use RIPS\ConnectorBundle\Entities\Application\Custom\SettingEntity;

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
     * Get settings for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SettingEntity
     */
    public function get($appId, $customId, array $queryParams)
    {
        $setting = $this->api->applications()->customs()->settings()->get($appId, $customId, $queryParams);

        return SettingHydrator::hydrate($setting);
    }

    /**
     * Update settings for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SettingBuilder $input
     * @param array $queryParams
     * @return SettingEntity
     */
    public function update($appId, $customId, SettingBuilder $input, array $queryParams = [])
    {
        $setting = $this->api->applications()->customs()->settings()->update($appId, $customId, $input->toArray(), $queryParams);

        return SettingHydrator::hydrate($setting);
    }
}
