<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\Application\Custom\ValidatorHydrator;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\ValidatorBuilder;
use RIPS\ConnectorBundle\Entities\Application\Custom\ValidatorEntity;

class ValidatorService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new ValidatorService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all validators for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return ValidatorEntity[]
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $validators = $this->api->customs()->validators()->getAll($appId, $customId, $queryParams);

        return ValidatorHydrator::hydrateCollection($validators);
    }

    /**
     * Get validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @return ValidatorEntity
     */
    public function getById($appId, $customId, $validatorId)
    {
        $validator = $this->api->customs()->validators()->getById($appId, $customId, $validatorId);

        return ValidatorHydrator::hydrate($validator);
    }

    /**
     * Create validator for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param ValidatorBuilder $input
     * @return ValidatorEntity
     */
    public function create($appId, $customId, ValidatorBuilder $input)
    {
        $validator = $this->api->customs()->validators()->create($appId, $customId, $input->toArray());

        return ValidatorHydrator::hydrate($validator);
    }

    /**
     * Update ingore for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param ValidatorBuilder $input
     * @return ValidatorEntity
     */
    public function update($appId, $customId, $validatorId, ValidatorBuilder $input)
    {
        $validator = $this->api->customs()->validators()->update($appId, $customId, $validatorId, $input->toArray());

        return ValidatorHydrator::hydrate($validator);
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
        $this->api->customs()->validators()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @return void
     */
    public function deleteById($appId, $customId, $validatorId)
    {
        $this->api->customs()->validators()->deleteById($appId, $customId, $validatorId);
    }
}
