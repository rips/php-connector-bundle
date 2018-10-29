<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\ValidatorBuilder;
use RIPS\ConnectorBundle\Responses\Application\Custom\ValidatorsResponse;
use RIPS\ConnectorBundle\Responses\Application\Custom\ValidatorResponse;

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
     * @return ValidatorsResponse
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $response = $this->api->applications()->customs()->validators()->getAll($appId, $customId, $queryParams);

        return new ValidatorsResponse($response);
    }

    /**
     * Get validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param array $queryParams
     * @return ValidatorResponse
     */
    public function getById($appId, $customId, $validatorId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->validators()->getById($appId, $customId, $validatorId, $queryParams);

        return new ValidatorResponse($response);
    }

    /**
     * Create validator for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param ValidatorBuilder $input
     * @param array $queryParams
     * @return ValidatorResponse
     */
    public function create($appId, $customId, ValidatorBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->validators()->create($appId, $customId, $input->toArray(), $queryParams);

        return new ValidatorResponse($response);
    }

    /**
     * Update validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param ValidatorBuilder $input
     * @param array $queryParams
     * @return ValidatorResponse
     */
    public function update($appId, $customId, $validatorId, ValidatorBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->validators()->update($appId, $customId, $validatorId, $input->toArray(), $queryParams);

        return new ValidatorResponse($response);
    }

    /**
     * Delete all validators for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->validators()->deleteAll($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete validator for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $validatorId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, $validatorId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->validators()->deleteById($appId, $customId, $validatorId, $queryParams);

        return new BaseResponse($response);
    }
}
