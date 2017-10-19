<?php

namespace RIPS\ConnectorBundle\Services\Application;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\CustomHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\CustomBuilder;
use RIPS\ConnectorBundle\Entities\Application\CustomEntity;

class CustomService
{
    /**
     * @var APIService
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
        $customs = $this->api->applications()->customs()->getAll($appId, $queryParams);

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
        $custom = $this->api->applications()->customs()->getById($appId, $customId);

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
        $custom = $this->api->applications()->customs()->create($appId, $input->toArray());

        return CustomHydrator::hydrate($custom);
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
        $custom = $this->api->applications()->customs()->update($appId, $customId, $input->toArray());

        return CustomHydrator::hydrate($custom);
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
        $this->api->applications()->customs()->deleteAll($appId, $queryParams);
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
        $this->api->applications()->customs()->deleteById($appId, $customId);
    }
}
