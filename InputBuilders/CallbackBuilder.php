<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class CallbackBuilder extends BaseBuilder
{
    /**
     * @var bool
     */
    protected $internal;

    /**
     * @var bool
     */
    protected $observeOrganization;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string[]
     */
    protected $reports;

    /**
     * @var int[]
     */
    protected $users;

    /**
     * @var int[]
     */
    protected $applications;

    /**
     * @var int[]
     */
    protected $scans;

    /**
     * @var int
     */
    protected $organization;

    /**
     * Set internal
     *
     * @param bool $internal
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->setFields[] = 'internal';
        $this->internal = $internal;
    
        return $this;
    }

    /**
     * Set observeOrganization
     *
     * @param bool $observeOrganization
     * @return $this
     */
    public function setObserveOrganization($observeOrganization)
    {
        $this->setFields[] = 'observeOrganization';
        $this->observeOrganization = $observeOrganization;

        return $this;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->setFields[] = 'url';
        $this->url = $url;

        return $this;
    }

    /**
     * Set reports
     *
     * @param string[] $reports
     * @return $this
     */
    public function setReports($reports)
    {
        $this->setFields[] = 'reports';
        $this->reports = $reports;

        return $this;
    }

    /**
     * Set users
     *
     * @param int[] $users
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->setFields[] = 'users';
        $this->users = $users;

        return $this;
    }

    /**
     * Set applications
     *
     * @param int[] $applications
     * @return $this
     */
    public function setApplications(array $applications)
    {
        $this->setFields[] = 'applications';
        $this->applications = $applications;

        return $this;
    }

    /**
     * Set scans
     *
     * @param int[] $scans
     * @return $this
     */
    public function setScans(array $scans)
    {
        $this->setFields[] = 'scans';
        $this->scans = $scans;

        return $this;
    }

    /**
     * Set organization
     *
     * @param int $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->setFields[] = 'organization';
        $this->organization = $organization;

        return $this;
    }
}
