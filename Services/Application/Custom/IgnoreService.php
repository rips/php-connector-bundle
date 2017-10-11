<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\IgnoreHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\IgnoreBuilder;

class IgnoreService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new IgnoreService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all ignores for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return IgnoreEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $ignores = $this->api->customs()->ignores()->getAll($appId, $customId, $queryParams);

        return IgnoreHydrator::hydrateCollection($ignores);
    }

    /**
     * Get ignore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $ignoreId
     * @return IgnoreEntity
     */
    public function getById($appId, $customId, $ignoreId)
    {
        $ignore = $this->api->customs()->ignores()->getById($appId, $customId, $ignoreId);

        return IgnoreHydrator::hydrate($ignore);
    }

    /**
     * Create ignore for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param IgnoreBuilder $input
     * @return IgnoreEntity
     */
    public function create($appId, $customId, IgnoreBuilder $input)
    {
        $ignore = $this->api->customs()->ignores()->create($appId, $customId, $input->toArray());

        return IgnoreHydrator::hydrateCollection($ignore);
    }

    /**
     * Update ingore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $ignoreId
     * @param IgnoreBuilder $input
     */
    public function update($appId, $customId, $ignoreId, IgnoreBuilder $input)
    {
        $ignore = $this->api->customs()->ignores()->update($appId, $customId, $ignoreId, $input->toArray());

        return IgnoreHydrator::hydrate($ignore);
    }

    /**
     * Delete all ingores for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $this->api->customs()->ignores()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete ignore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $ignoreId
     * @return void
     */
    public function deleteById($appId, $customId, $ignoreId)
    {
        $this->api->customs()->ignores()->deleteById($appId, $customId, $ignoreId);
    }
}
