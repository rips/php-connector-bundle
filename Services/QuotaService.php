<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;
use RIPS\ConnectorBundle\InputBuilders\QuotaBuilder;

class QuotaService
{
    // @var API
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
}
