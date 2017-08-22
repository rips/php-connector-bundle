<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\Connector\API;

class APIService
{
    // @var API
    protected $api;

    public function __construct($username, $password, $config)
    {
        $this->api = new API($username, $password, $config);
    }

    public function users()
    {
        return $this->api->users;
    }

    public function orgs()
    {
        return $this->api->orgs;
    }

    public function quotas()
    {
        return $this->api->quotas;
    }

    public function applications()
    {
        return $this->api->applications;
    }

    public function scans()
    {
        return $this->api->scans;
    }
}
