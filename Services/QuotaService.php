<?php

namespace RIPS\ConnectorBundle\Services;

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
     * Get a collection of quotas objects
     *
     * @return Array<>
     */
    public function getAll()
    {
        return $this->api->quotas()->getAll();
    }
}
