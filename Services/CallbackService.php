<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\CallbackBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\CallbacksResponse;
use RIPS\ConnectorBundle\Responses\CallbackResponse;

class CallbackService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new CallbackService instance
     *
     * @param APIService $api
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all callbacks
     *
     * @param array $queryParams
     * @return CallbacksResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->callbacks()->getAll($queryParams);

        return new CallbacksResponse($response);
    }

    /**
     * Get callback by id
     *
     * @param int $callbackId
     * @param array $queryParams
     * @return CallbackResponse
     */
    public function getById($callbackId, array $queryParams = [])
    {
        $response = $this->api->callbacks()->getById($callbackId, $queryParams);

        return new CallbackResponse($response);
    }

    /**
     * Create a new callback
     *
     * @param CallbackBuilder $input
     * @param array $queryParams
     * @return CallbackResponse
     */
    public function create(CallbackBuilder $input, array $queryParams = [])
    {
        $response = $this->api->callbacks()->create($input->toArray(), $queryParams);

        return new CallbackResponse($response);
    }

    /**
     * Update an existing callback
     *
     * @param int $callbackId
     * @param CallbackBuilder $input
     * @param array $queryParams
     * @return CallbackResponse
     */
    public function update($callbackId, CallbackBuilder $input, array $queryParams = [])
    {
        $response = $this->api->callbacks()->update($callbackId, $input->toArray(), $queryParams);

        return new CallbackResponse($response);
    }

    /**
     * Delete all callbacks
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->callbacks()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete callback by id
     *
     * @param int $callbackId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($callbackId, array $queryParams = [])
    {
        $response = $this->api->callbacks()->deleteById($callbackId, $queryParams);

        return new BaseResponse($response);
    }
}
