<?php

namespace RIPS\ConnectorBundle\Services;

use RIPS\Connector\API;
use RIPS\ConnectorBundle\Entities\StatusEntity;
use RIPS\ConnectorBundle\Hydrators\StatusHydrator;

class APIService
{
    /**
     * @var API
     */
    protected $api;

    /**
     * APIService constructor.
     *
     * @param $username
     * @param $password
     * @param $config
     */
    public function __construct($username, $password, $config)
    {
        $this->initialize($username, $password, $config);
    }

    /**
     * Initialize API instance
     *
     * @param $username
     * @param $password
     * @param $config
     * @return void
     */
    public function initialize($username, $password, $config)
    {
        $this->api = new API($username, $password, $config);
    }

    /**
     * Activity requests accessor
     *
     * @return \RIPS\Connector\Requests\ActivityRequests
     */
    public function activities()
    {
        return $this->api->activities;
    }

    /**
     * Application requests accessor
     *
     * @return \RIPS\Connector\Requests\ApplicationRequests
     */
    public function applications()
    {
        return $this->api->applications;
    }

    /**
     * License requests accessor
     *
     * @return \RIPS\Connector\Requests\LicenseRequests
     */
    public function licenses()
    {
        return $this->api->licenses;
    }

    /**
     * Log requests accessor
     *
     * @return \RIPS\Connector\Requests\LogRequests
     */
    public function logs()
    {
        return $this->api->logs;
    }

    /**
     * Org requests accessor
     *
     * @return \RIPS\Connector\Requests\OrgRequests
     */
    public function orgs()
    {
        return $this->api->orgs;
    }

    /**
     * Quota requests accessor
     *
     * @return \RIPS\Connector\Requests\QuotaRequests
     */
    public function quotas()
    {
        return $this->api->quotas;
    }

    /**
     * Setting requests accessor
     *
     * @return \RIPS\Connector\Requests\SettingsRequests
     */
    public function settings()
    {
        return $this->api->settings;
    }

    /**
     * Source requests accessor
     *
     * @return \RIPS\Connector\Requests\SourceRequests
     */
    public function sources()
    {
        return $this->api->sources;
    }

    /**
     * Team requests accessor
     *
     * @return \RIPS\Connector\Requests\TeamRequests
     */
    public function teams()
    {
        return $this->api->teams;
    }

    /**
     * User requests accessor
     *
     * @return \RIPS\Connector\Requests\UserRequests
     */
    public function users()
    {
        return $this->api->users;
    }

    /**
     * Get status of current session from API
     *
     * @return StatusEntity
     */
    public function getStatus()
    {
        $status = $this->api->status->getStatus();

        return StatusHydrator::hydrate($status);
    }
}
