<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\InputBuilders\QuotaBuilder;
use RIPS\ConnectorBundle\Responses\BaseResponse;
use RIPS\ConnectorBundle\Responses\QuotasResponse;
use RIPS\ConnectorBundle\Responses\QuotaResponse;

class QuotaService
{
    /**
     * @var APIService
     */
    protected $api;

    /**
     * Initialize new OrgService instance
     *
     * @param APIService
     */
    public function __construct(APIService $api)
    {
        $this->api = $api;
    }

    /**
     * Get all quotas
     *
     * @param array $queryParams
     * @return QuotasResponse
     */
    public function getAll(array $queryParams = [])
    {
        $response = $this->api->quotas()->getAll($queryParams);

        return new QuotasResponse($response);
    }

    /**
     * Get a quota by id
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return QuotaResponse
     */
    public function getById($quotaId, array $queryParams = [])
    {
        $response = $this->api->quotas()->getById($quotaId, $queryParams);

        return new QuotaResponse($response);
    }

    /**
     * Create a new quota
     *
     * @param QuotaBuilder $input
     * @param array $queryParams
     * @return QuotaResponse
     */
    public function create(QuotaBuilder $input, array $queryParams = [])
    {
        $response = $this->api->quotas()->create($input->toArray(), $queryParams);

        return new QuotaResponse($response);
    }

    /**
     * Update an existing quota
     *
     * @param int $quotaId
     * @param QuotaBuilder $input
     * @param array $queryParams
     * @return QuotaResponse
     */
    public function update($quotaId, QuotaBuilder $input, array $queryParams = [])
    {
        $response = $this->api->quotas()->update($quotaId, $input->toArray(), $queryParams);

        return new QuotaResponse($response);
    }

    /**
     * Delete all quotas
     *
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteAll(array $queryParams = [])
    {
        $response = $this->api->quotas()->deleteAll($queryParams);

        return new BaseResponse($response);
    }

    /**
     * Delete quota by id
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return BaseResponse
     */
    public function deleteById($quotaId, array $queryParams = [])
    {
        $response = $this->api->quotas()->deleteById($quotaId, $queryParams);

        return new BaseResponse($response);
    }
}
