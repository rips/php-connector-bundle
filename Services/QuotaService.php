<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\ConnectorBundle\Hydrators\QuotaHydrator;

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
     * @param array $input
     * @return QuotaEntity
     */
    public function create(array $input)
    {
        $quota = $this->api->quotas()->create($input);

        return QuotaHydrator::hydrate($quota);
    }
}
