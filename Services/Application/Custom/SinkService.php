<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SinkHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SinkBuilder;
use RIPS\ConnectorBundle\Entities\Application\Custom\SinkEntity;

class SinkService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new SinkService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sinks for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SinkEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $sinks = $this->api->applications()->customs()->sinks()->getAll($appId, $customId, $queryParams);

        return SinkHydrator::hydrateCollection($sinks);
    }

    /**
     * Get sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param array $queryParams
     * @return SinkEntity
     */
    public function getById($appId, $customId, $sinkId, array $queryParams = [])
    {
        $sink = $this->api->applications()->customs()->sinks()->getById($appId, $customId, $sinkId, $queryParams);

        return SinkHydrator::hydrate($sink);
    }

    /**
     * Create sink for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SinkBuilder $input
     * @param array $queryParams
     * @return SinkEntity
     */
    public function create($appId, $customId, SinkBuilder $input, array $queryParams = [])
    {
        $sink = $this->api->applications()->customs()->sinks()->create($appId, $customId, $input->toArray(), $queryParams);

        return SinkHydrator::hydrate($sink);
    }

    /**
     * Update sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param SinkBuilder $input
     * @param array $queryParams
     * @return SinkEntity
     */
    public function update($appId, $customId, $sinkId, SinkBuilder $input, array $queryParams = [])
    {
        $sink = $this->api->applications()->customs()->sinks()->update($appId, $customId, $sinkId, $input->toArray(), $queryParams);

        return SinkHydrator::hydrate($sink);
    }

    /**
     * Delete all sink for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $this->api->applications()->customs()->sinks()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete sink for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sinkId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $customId, $sinkId, array $queryParams = [])
    {
        $this->api->applications()->customs()->sinks()->deleteById($appId, $customId, $sinkId, $queryParams);
    }
}
