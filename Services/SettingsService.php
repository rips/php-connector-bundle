<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\SettingsHydrator;
use RIPS\ConnectorBundle\InputBuilders\SettingsBuilder;
use RIPS\ConnectorBundle\Entities\SettingsEntity;

class SettingsService
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
     * @return SettingsEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $org = $this->api->settings()->getAll($queryParams);

        return SettingsHydrator::hydrateCollection($org);
    }

    /**
     * Get a quota by id
     *
     * @param string $key
     * @param array $queryParams
     * @return SettingsEntity
     */
    public function getByKey($key, array $queryParams = [])
    {
        $org = $this->api->settings()->getByKey($key, $queryParams);

        return SettingsHydrator::hydrate($org);
    }

    /**
     * Create or update a quota
     *
     * @param string $key
     * @param SettingsBuilder $input
     * @param array $queryParams
     * @return SettingsEntity
     */
    public function createOrUpdate($key, SettingsBuilder $input, array $queryParams = [])
    {
        $quota = $this->api->settings()->createOrUpdate($key, $input->toArray(), $queryParams);

        return SettingsHydrator::hydrate($quota);
    }

    /**
     * Delete all settings
     *
     * @param array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->settings()->deleteAll($queryParams);
    }

    /**
     * Delete quota by id
     *
     * @param string $key
     * @param array $queryParams
     * @return void
     */
    public function deleteByKey($key, array $queryParams = [])
    {
        $this->api->settings()->deleteByKey($key, $queryParams);
    }
}
