<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SanitiserHydrator;

class SanitiserService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * Initialize new SanitiserService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all sanitisers for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return SanitiserEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $sanitisers = $this->api->customs()->sanitisers()->getAll($appId, $customId, $queryParams);

        return SanitiserHydrator::hydrateCollection($sanitisers);
    }

    /**
     * Get sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @return SanitiserEntity
     */
    public function getById($appId, $customId, $sanitiserId)
    {
        $sanitiser = $this->api->customs()->sanitisers()->getById($appId, $customId, $sanitiserId);

        return SanitiserHydrator::hydrate($sanitiser);
    }

    /**
     * Create sanitiser for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SanitiserBuilder $input
     * @return SanitiserEntity
     */
    public function create($appId, $customId, SanitiserBuilder $input)
    {
        $sanitiser = $this->api->customs()->sanitisers()->create($appId, $customId, $input->toArray());

        return SanitiserHydrator::hydrateCollection($sanitiser);
    }

    /**
     * Update ingore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param SanitiserBuilder $input
     */
    public function update($appId, $customId, $sanitiserId, SanitiserBuilder $input)
    {
        $sanitiser = $this->api->customs()->sanitisers()->update($appId, $customId, $sanitiserId, $input->toArray());

        return SanitiserHydrator::hydrate($sanitiser);
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
        $this->api->customs()->sanitisers()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @return void
     */
    public function deleteById($appId, $customId, $sanitiserId)
    {
        $this->api->customs()->sanitisers()->deleteById($appId, $customId, $sanitiserId);
    }
}
