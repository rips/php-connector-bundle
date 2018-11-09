<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class CallbackEntity
{
    /**
     * @var integer
     */
    protected $id;

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
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var UserEntity[]
     */
    protected $users;

    /**
     * @var ApplicationEntity[]
     */
    protected $applications;

    /**
     * @var ScanEntity[]
     */
    protected $scans;

    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
    
        return $this;
    }

    /**
     * Get internal
     *
     * @return bool
     */
    public function getInternal()
    {
        return $this->internal;
    }

    /**
     * Set internal
     *
     * @param bool $internal
     * @return $this
     */
    public function setInternal($internal)
    {
        $this->internal = $internal;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }
    
    /**
     * Set url
     *
     * @param string $url
     * @return $this
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get reports
     *
     * @return string[]
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * Set reports
     *
     * @param string[] $reports
     * @return $this
     */
    public function setReports($reports)
    {
        $this->reports = $reports;

        return $this;
    }

    /**
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get users
     *
     * @return UserEntity[]
     */
    public function getUsers()
    {
        return $this->users;
    }
    
    /**
     * Set users
     *
     * @param UserEntity[] $users
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->users = $users;
    
        return $this;
    }

    /**
     * Get applications
     *
     * @return ApplicationEntity[]
     */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * Set applications
     *
     * @param ApplicationEntity[] $applications
     * @return $this
     */
    public function setApplications(array $applications)
    {
        $this->applications = $applications;

        return $this;
    }

    /**
     * Get scans
     *
     * @return ScanEntity[]
     */
    public function getScans()
    {
        return $this->scans;
    }

    /**
     * Set scans
     *
     * @param ScanEntity[] $scans
     * @return $this
     */
    public function setScans(array $scans)
    {
        $this->scans = $scans;

        return $this;
    }
}
