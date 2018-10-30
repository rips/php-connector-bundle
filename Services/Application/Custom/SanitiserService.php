<?php

namespace RIPS\ConnectorBundle\Services\Application\Custom;

use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\InputBuilders\Application\Custom\SanitiserBuilder;
use RIPS\ConnectorBundle\Responses\Application\Custom\SanitisersResponse;
use RIPS\ConnectorBundle\Responses\Application\Custom\SanitiserResponse;

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
     * @return SanitisersResponse
     */
    public function getAll($appId, $customId, array $queryParams)
    {
        $response = $this->api->applications()->customs()->sanitisers()->getAll($appId, $customId, $queryParams);

        return new SanitisersResponse($response);
    }

    /**
     * Get sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param array $queryParams
     * @return SanitiserResponse
     */
    public function getById($appId, $customId, $sanitiserId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sanitisers()->getById($appId, $customId, $sanitiserId, $queryParams);

        return new SanitiserResponse($response);
    }

    /**
     * Create sanitiser for custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param SanitiserBuilder $input
     * @param array $queryParams
     * @return SanitiserResponse
     */
    public function create($appId, $customId, SanitiserBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sanitisers()->create($appId, $customId, $input->toArray(), $queryParams);

        return new SanitiserResponse($response);
    }

    /**
     * Update sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param SanitiserBuilder $input
     * @param array $queryParams
     * @return SanitiserResponse
     */
    public function update($appId, $customId, $sanitiserId, SanitiserBuilder $input, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sanitisers()->update($appId, $customId, $sanitiserId, $input->toArray(), $queryParams);

        return new SanitiserResponse($response);
    }

    /**
     * Delete all sanitiser for a custom profile
     *
     * @param int $appId
     * @param int $customId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll($appId, $customId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sanitisers()->deleteAll($appId, $customId, $queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete sanitiser for custom profile by id
     *
     * @param int $appId
     * @param int $customId
     * @param int $sanitiserId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($appId, $customId, $sanitiserId, array $queryParams = [])
    {
        $response = $this->api->applications()->customs()->sanitisers()->deleteById($appId, $customId, $sanitiserId, $queryParams);

        return new BaseResponse($response);
    }
}
