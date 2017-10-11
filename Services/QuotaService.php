<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Services\APIService;
use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\InputBuilders\QuotaBuilder;

class QuotaService
{
    /**
     * @var API
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
        $org = $this->api->quotas()->getAll($queryParams);

        return QuotaHydrator::hydrateCollection($org);
    }

    /**
     * Get a quota by id
     *
     * @param int $quotaId
     * @return QuotaEntity
     */
    public function getById($quotaId)
    {
        $org = $this->api->quotas()->getById($quotaId);

        return QuotaHydrator::hydrate($org);
    }

    /**
     * Create a new quota
     *
     * @param QuotaBuilder $input
     * @return QuotaEntity
     */
    public function create(QuotaBuilder $input)
    {
        $quota = $this->api->quotas()->create($input->toArray());

        return QuotaHydrator::hydrate($quota);
    }

    /**
     * Update an existing quota
     *
     * @param int $quotaId
     * @param QuotaBuilder $input
     * @return QuotaEntity
     */
    public function update($quotaId, QuotaBuilder $input)
    {
        $quota = $this->api->quotas()->update($quotaId, $input->toArray());

        return QuotaHydrator::hydrate($quota);
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
     * @return void
     */
    public function deleteById($quotaId)
    {
        $this->api->quotas()->deleteById($quotaId);
    }
}
