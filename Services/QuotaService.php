<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\InputBuilders\QuotaBuilder;
use RIPS\ConnectorBundle\Entities\QuotaEntity;

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
     * @return QuotaEntity[]
     */
    public function getAll(array $queryParams = [])
    {
        $quotas = $this->api->quotas()->getAll($queryParams);

        return QuotaHydrator::hydrateCollection($quotas->getDecodedData());
    }

    /**
     * Get a quota by id
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return QuotaEntity
     */
    public function getById($quotaId, array $queryParams = [])
    {
        $quota = $this->api->quotas()->getById($quotaId, $queryParams);

        return QuotaHydrator::hydrate($quota->getDecodedData());
    }

    /**
     * Create a new quota
     *
     * @param QuotaBuilder $input
     * @param array $queryParams
     * @return QuotaEntity
     */
    public function create(QuotaBuilder $input, array $queryParams = [])
    {
        $quota = $this->api->quotas()->create($input->toArray(), $queryParams);

        return QuotaHydrator::hydrate($quota->getDecodedData());
    }

    /**
     * Update an existing quota
     *
     * @param int $quotaId
     * @param QuotaBuilder $input
     * @param array $queryParams
     * @return QuotaEntity
     */
    public function update($quotaId, QuotaBuilder $input, array $queryParams = [])
    {
        $quota = $this->api->quotas()->update($quotaId, $input->toArray(), $queryParams);

        return QuotaHydrator::hydrate($quota->getDecodedData());
    }

    /**
     * Delete all quotas
     *
     * @param array $queryParams
     * @return void
     */
    public function deleteAll(array $queryParams = [])
    {
        $this->api->quotas()->deleteAll($queryParams);
    }

    /**
     * Delete quota by id
     *
     * @param int $quotaId
     * @param array $queryParams
     * @return void
     */
    public function deleteById($quotaId, array $queryParams = [])
    {
        $this->api->quotas()->deleteById($quotaId, $queryParams);
    }
}
