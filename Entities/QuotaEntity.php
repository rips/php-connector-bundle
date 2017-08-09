<?php

namespace RIPS\ConnectorBundle\Entities;

class QuotaEntity
{
    // @var integer
    protected $id;

    // @var integer
    protected $current_application;

    // @var integer
    protected $current_scan;

    // @var integer
    protected $current_user;

    // @var integer
    protected $max_applications;

    // @var integer
    protected $max_scans;

    // @var integer
    protected $max_users;

    // @var string
    protected $valid_from;

    // @var string
    protected $valid_until;

    // @var boolean
    protected $public;

    /**
     * Set id
     *
     * @param integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set current_application
     *
     * @param integer $currentApp
     * @return void
     */
    public function setCurrentApplication(int $currentApp)
    {
        $this->current_application = $currentApp;
    }

    /**
     * Get current_application
     *
     * @return integer
     */
    public function getCurrentApplication()
    {
        return $this->current_application;
    }

    /**
     * Set current_scan
     *
     * @param integer $currentScan
     * @return void
     */
    public function setCurrentScan(int $currentScan)
    {
        $this->current_scan = $currentScan;
    }

    /**
     * Get current_scan
     *
     * @return integer
     */
    public function getCurrentScan()
    {
        return $this->current_scan;
    }

    /**
     * Set current_user
     *
     * @param integer $currentUser
     * @return void
     */
    public function setCurrentUser(int $currentUser)
    {
        $this->current_user = $currentUser;
    }

    /**
     * Get current_user
     *
     * @return integer
     */
    public function getCurrentUser(int $currentUser)
    {
        return $this->current_user;
    }

    /**
     * Set max_applications
     *
     * @param integer $maxApplications
     * @return void
     */
    public function setMaxApplications(int $maxApplications)
    {
        $this->max_applications = $maxApplications;
    }

    /**
     * Get max_applications
     *
     * @return integer
     */
    public function getMaxApplications()
    {
        return $this->max_applications;
    }

    /**
     * Set max_scans
     *
     * @param integer $maxScans
     * @return void
     */
    public function setMaxScans(int $maxScans)
    {
        return $this->max_scans = $maxScans;
    }

    /**
     * Get max_scans
     *
     * @return integer
     */
    public function getMaxScans()
    {
        return $this->max_scans;
    }

    /**
     * Set max_users
     *
     * @param integer $maxUsers
     * @return void
     */
    public function setMaxUsers(int $maxUsers)
    {
        $this->max_users = $maxUsers;
    }

    /**
     * Get max_users
     *
     * @return integer
     */
    public function getMaxUsers()
    {
        return $this->max_users;
    }

    /**
     * Set valid_from
     *
     * @param string $validFrom
     * @return void
     */
    public function setValidFrom(string $validFrom)
    {
        $this->valid_from = $validFrom;
    }

    /**
     * Get valid_from
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->valid_from;
    }

    /**
     * Set valid_until
     *
     * @param string $validUntil
     * @return void
     */
    public function setValidUntil(string $validUntil)
    {
        $this->valid_until = $validUntil;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return void
     */
    public function setPublic(bool $public)
    {
        $this->public = $public;
    }
    
    /**
     * Get public
     *
     * @return boolean
     */
    public function getPublic()
    {
        return $this->public;
    }
}
