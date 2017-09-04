<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\InputBuilders\QuotaBuilder;
use RIPS\ConnectorBundle\Entities\QuotaEntity;

class QuotaService
{
    /** @var API */
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
     * @param  array $queryParams
     * @return array<QuotaEntity>
     */
    public function getAll(array $queryParams = [])
    {
        $org = $this->api->quotas()->getAll($queryParams);

        return QuotaHydrator::hydrateCollection($org);
    }

    /**
     * Get a quota by id
     *
     * @param  int $quotaId
     * @return QuotaEntity
     */
    public function getById(int $quotaId)
    {
        $org = $this->api->quotas()->getById($quotaId);

        return QuotaHydrator::hydrate($org);
    }

    /**
     * Create a new quota
     *
     * @param  QuotaBuilder $input
     * @return QuotaEntity
     */
    public function create(QuotaBuilder $input)
    {
        $quota = $this->api->quotas()->create($input->toArray());

        return QuotaHydrator::hydrate($quota);
    }
}
