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
        $validators = $this->api->applications()->customs()->validators()->getAll($appId, $customId, $queryParams);

        return ValidatorHydrator::hydrateCollection($validators->getDecodedData());
    }

    /**
     * Get validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param array $queryParams
     * @return ValidatorEntity
     */
    public function getById($appId, $customId, $validatorId, array $queryParams = [])
    {
        $validator = $this->api->applications()->customs()->validators()->getById($appId, $customId, $validatorId, $queryParams);

        return ValidatorHydrator::hydrate($validator->getDecodedData());
    }

    /**
     * Create validator for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param ValidatorBuilder $input
     * @param array $queryParams
     * @return ValidatorEntity
     */
    public function create($appId, $customId, ValidatorBuilder $input, array $queryParams = [])
    {
        $validator = $this->api->applications()->customs()->validators()->create($appId, $customId, $input->toArray(), $queryParams);

        return ValidatorHydrator::hydrate($validator->getDecodedData());
    }

    /**
     * Update validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param ValidatorBuilder $input
     * @param array $queryParams
     * @return ValidatorEntity
     */
    public function update($appId, $customId, $validatorId, ValidatorBuilder $input, array $queryParams = [])
    {
        $validator = $this->api->applications()->customs()->validators()->update($appId, $customId, $validatorId, $input->toArray(), $queryParams);

        return ValidatorHydrator::hydrate($validator->getDecodedData());
    }

    /**
     * Delete all validators for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return void
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $this->api->applications()->customs()->validators()->deleteAll($appId, $customId, $queryParams);
    }

    /**
     * Delete validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($appId, $customId, $validatorId, array $queryParams = [])
    {
        $this->api->applications()->customs()->validators()->deleteById($appId, $customId, $validatorId, $queryParams);
    }
}
