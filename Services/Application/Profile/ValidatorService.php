<?php

namespace RIPS\ConnectorBundle\Services\Application\Profile;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Profile\ValidatorBuilder;
use RIPS\ConnectorBundle\Responses\Application\Profile\ValidatorsResponse;
use RIPS\ConnectorBundle\Responses\Application\Profile\ValidatorResponse;

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
     * Get all validators for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return ValidatorsResponse
     */
    public function getAll($appId, $profileId, array $queryParams)
    {
        $response = $this->api->applications()->profiles()->validators()->getAll($appId, $profileId, $queryParams);

        return new ValidatorsResponse($response);
    }

    /**
     * Get validator for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $validatorId
     * @param array $queryParams
     * @return ValidatorResponse
     */
    public function getById($appId, $profileId, $validatorId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->validators()->getById($appId, $profileId, $validatorId, $queryParams);

        return new ValidatorResponse($response);
    }

    /**
     * Create validator for profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param ValidatorBuilder $input
     * @param array $queryParams
     * @return ValidatorResponse
     */
    public function create($appId, $profileId, ValidatorBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->validators()->create($appId, $profileId, $input->toArray(), $queryParams);

        return new ValidatorResponse($response);
    }

    /**
     * Update validator for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $validatorId
     * @param ValidatorBuilder $input
     * @param array $queryParams
     * @return ValidatorResponse
     */
    public function update($appId, $profileId, $validatorId, ValidatorBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->validators()->update($appId, $profileId, $validatorId, $input->toArray(), $queryParams);

        return new ValidatorResponse($response);
    }

    /**
     * Delete all validators for a profile profile
     *
     * @param int $appId
     * @param int $profileId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $profileId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->validators()->deleteAll($appId, $profileId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete validator for profile profile by id
     *
     * @param int $appId
     * @param int $profileId
     * @param int $validatorId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $profileId, $validatorId, array $queryParams = [])
    {
        $response = $this->api->applications()->profiles()->validators()->deleteById($appId, $profileId, $validatorId, $queryParams);

        return new BaseResponse($response);
    }
}
