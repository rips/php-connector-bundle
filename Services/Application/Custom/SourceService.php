<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SourceHydrator;

class SourceService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new SourceService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sources for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SourceEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $sources = $this->api->customs()->sources()->getAll($appId, $customId, $queryParams);

        return SourceHydrator::hydrateCollection($sources);
    }

    /**
     * Get source for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sourceId
     * @return SourceEntity
     */
    public function getById($appId, $customId, $sourceId)
    {
        $source = $this->api->customs()->sources()->getById($appId, $customId, $sourceId);

        return SourceHydrator::hydrate($source);
    }

    /**
     * Create source for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SourceBuilder $input
     * @return SourceEntity
     */
    public function create($appId, $customId, SourceBuilder $input)
    {
        $source = $this->api->customs()->sources()->create($appId, $customId, $input->toArray());

        return SourceHydrator::hydrateCollection($source);
    }

    /**
     * Update ingore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sourceId
     * @param SourceBuilder $input
     */
    public function update($appId, $customId, $sourceId, SourceBuilder $input)
    {
        $source = $this->api->customs()->sources()->update($appId, $customId, $sourceId, $input->toArray());

        return SourceHydrator::hydrate($source);
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
        $this->api->customs()->sources()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete source for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sourceId
     * @return void
     */
    public function deleteById($appId, $customId, $sourceId)
    {
        $this->api->customs()->sources()->deleteById($appId, $customId, $sourceId);
    }
}
