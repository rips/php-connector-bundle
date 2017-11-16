<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\SanitiserHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SanitiserBuilder;
use RIPS\ConnectorBundle\Entities\Application\Custom\SanitiserEntity;

class SanitiserService
{
    /**
     * @var APIService
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
        $sanitisers = $this->api->applications()->customs()->sanitisers()->getAll($appId, $customId, $queryParams);

        return SanitiserHydrator::hydrateCollection($sanitisers);
    }

    /**
     * Get sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param array $queryParams
     * @return SanitiserEntity
     */
    public function getById($appId, $customId, $sanitiserId, array $queryParams = [])
    {
        $sanitiser = $this->api->applications()->customs()->sanitisers()->getById($appId, $customId, $sanitiserId, $queryParams);

        return SanitiserHydrator::hydrate($sanitiser);
    }

    /**
     * Create sanitiser for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SanitiserBuilder $input
     * @param array $queryParams
     * @return SanitiserEntity
     */
    public function create($appId, $customId, SanitiserBuilder $input, array $queryParams = [])
    {
        $sanitiser = $this->api->applications()->customs()->sanitisers()->create($appId, $customId, $input->toArray(), $queryParams);

        return SanitiserHydrator::hydrate($sanitiser);
    }

    /**
     * Update sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param SanitiserBuilder $input
     * @param array $queryParams
     * @return SanitiserEntity
     */
    public function update($appId, $customId, $sanitiserId, SanitiserBuilder $input, array $queryParams = [])
    {
        $sanitiser = $this->api->applications()->customs()->sanitisers()->update($appId, $customId, $sanitiserId, $input->toArray(), $queryParams);

        return SanitiserHydrator::hydrate($sanitiser);
    }

    /**
     * Delete all sanitiser for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $this->api->applications()->customs()->sanitisers()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $customId, $sanitiserId, array $queryParams = [])
    {
        $this->api->applications()->customs()->sanitisers()->deleteById($appId, $customId, $sanitiserId, $queryParams);
    }
}
