<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ControllerHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\ControllerBuilder;
use RIPS\ConnectorBundle\Entities\Application\Custom\ControllerEntity;

class ControllerService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ControllerService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all controllers for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return ControllerEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $controllers = $this->api->applications()->customs()->controllers()->getAll($appId, $customId, $queryParams);

        return ControllerHydrator::hydrateCollection($controllers->getDecodedData());
    }

    /**
     * Get controller for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $controllerId
     * @param array $queryParams
     * @return ControllerEntity
     */
    public function getById($appId, $customId, $controllerId, array $queryParams = [])
    {
        $controller = $this->api->applications()->customs()->controllers()->getById($appId, $customId, $controllerId, $queryParams);

        return ControllerHydrator::hydrate($controller->getDecodedData());
    }

    /**
     * Create controller for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param ControllerBuilder $input
     * @param array $queryParams
     * @return ControllerEntity
     */
    public function create($appId, $customId, ControllerBuilder $input, array $queryParams = [])
    {
        $controller = $this->api->applications()->customs()->controllers()->create($appId, $customId, $input->toArray(), $queryParams);

        return ControllerHydrator::hydrate($controller->getDecodedData());
    }

    /**
     * Update controller for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $controllerId
     * @param ControllerBuilder $input
     * @param array $queryParams
     * @return ControllerEntity
     */
    public function update($appId, $customId, $controllerId, ControllerBuilder $input, array $queryParams = [])
    {
        $controller = $this->api->applications()->customs()->controllers()->update($appId, $customId, $controllerId, $input->toArray(), $queryParams);

        return ControllerHydrator::hydrate($controller->getDecodedData());
    }

    /**
     * Delete all controllers for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $this->api->applications()->customs()->controllers()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete controller for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $controllerId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $customId, $controllerId, array $queryParams = [])
    {
        $this->api->applications()->customs()->controllers()->deleteById($appId, $customId, $controllerId, $queryParams);
    }
}
