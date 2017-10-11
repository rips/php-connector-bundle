<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\CustomHydrator;

class CustomService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new CustomService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all custom profiles for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return CustomEntity[]
     */
    public function getAll($appId, array $queryParams)
    {
        $customs = $this->api->customs()->getAll($appId, $queryParams);

        return CustomHydrator::hydrateCollection($customs);
    }

    /**
     * Get custom for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @return CustomEntity
     */
    public function getById($appId, $customId)
    {
        $custom = $this->api->customs()->getById($appId, $customId);

        return CustomHydrator::hydrate($custom);
    }

    /**
     * Create a custom profile for an application
     *
     * @param int $appId
     * @param CustomBuilder $input
     * @return CustomEntity
     */
    public function create($appId, CustomBuilder $input)
    {
        $custom = $this->api->customs()->create($appId, $input->toArray());

        return CustomHydrator::hydrateCollection($custom);
    }

    /**
     * Update a custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param CustomBuilder $input
     * @return CustomEntity
     */
    public function update($appId, $customId, CustomBuilder $input)
    {
        $custom = $this->api->customs()->update($appId, $customId, $input->toArray());
    }

    /**
     * Delete all custom profiles for an application
     *
     * @param int $appId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, array $queryParams = [])
    {
        $this->api->customs()->deleteAll($appId, $queryParams);
    }

    /**
     * Delete a custom profile for an application by id
     *
     * @param int $appId
     * @param int $customId
     * @return void
     */
    public function deleteById($appId, $customId)
    {
        $this->api->customs()->deleteById($appId, $customId);
    }
}
