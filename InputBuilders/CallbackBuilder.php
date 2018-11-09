<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class CallbackBuilder extends BaseBuilder
{
    /**
     * @var bool
     */
    protected $internal;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string[]
     */
    protected $reports;

    /**
     * @var integer[]
     */
    protected $users;

    /**
     * @var integer[]
     */
    protected $applications;

    /**
     * @var integer[]
     */
    protected $scans;

    /**
     * @var integer
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
     * @param integer[] $users
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
     * @param integer[] $applications
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
     * @param integer[] $scans
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
     * @param integer $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->setFields[] = 'organization';
        $this->organization = $organization;

        return $this;
    }
}
