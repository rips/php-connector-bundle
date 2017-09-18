<?php

namespace RIPS\ConnectorBundle\Entities;

use RIPS\ConnectorBundle\Entities\OrgEntity;

class QuotaEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var integer
     */
    protected $currentApplication;

    /**
     * @var integer
     */
    protected $currentScan;

    /**
     * @var integer
     */
    protected $currentUser;

    /**
     * @var integer
     */
    protected $maxApplications;

    /**
     * @var integer
     */
    protected $maxScans;

    /**
     * @var integer
     */
    protected $maxUsers;

    /**
     * @var integer
     */
    protected $maxLoc;

    /**
     * @var string
     */
    protected $validFrom;

    /**
     * @var string
     */
    protected $validUntil;

    /**
     * @var boolean
     */
    protected $public;

    /**
     * @var OrgEntity
     */
    protected $org;

    /**
     * @var boolean
     */
    protected $notify;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId($id)
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
     * Set currentApplication
     *
     * @param  integer $currentApp
     * @return void
     */
    public function setCurrentApplication($currentApp)
    {
        $this->currentApplication = $currentApp;
    }

    /**
     * Get currentApplication
     *
     * @return integer
     */
    public function getCurrentApplication()
    {
        return $this->currentApplication;
    }

    /**
     * Set currentScan
     *
     * @param  integer $currentScan
     * @return void
     */
    public function setCurrentScan($currentScan)
    {
        $this->currentScan = $currentScan;
    }

    /**
     * Get currentScan
     *
     * @return integer
     */
    public function getCurrentScan()
    {
        return $this->currentScan;
    }

    /**
     * Set currentUser
     *
     * @param  integer $currentUser
     * @return void
     */
    public function setCurrentUser($currentUser)
    {
        $this->currentUser = $currentUser;
    }

    /**
     * Get currentUser
     *
     * @return integer
     */
    public function getCurrentUser()
    {
        return $this->currentUser;
    }

    /**
     * Set maxApplications
     *
     * @param  integer $maxApplications
     * @return void
     */
    public function setMaxApplications($maxApplications)
    {
        $this->maxApplications = $maxApplications;
    }

    /**
     * Get maxApplications
     *
     * @return integer
     */
    public function getMaxApplications()
    {
        return $this->maxApplications;
    }

    /**
     * Set maxScans
     *
     * @param  integer $maxScans
     * @return void
     */
    public function setMaxScans($maxScans)
    {
        $this->maxScans = $maxScans;
    }

    /**
     * Get maxScans
     *
     * @return integer
     */
    public function getMaxScans()
    {
        return $this->maxScans;
    }

    /**
     * Set maxUsers
     *
     * @param  integer $maxUsers
     * @return void
     */
    public function setMaxUsers($maxUsers)
    {
        $this->maxUsers = $maxUsers;
    }

    /**
     * Get maxUsers
     *
     * @return integer
     */
    public function getMaxUsers()
    {
        return $this->maxUsers;
    }

    /**
     * Set maxLoc
     *
     * @param integer $maxLoc
     * @return void
     */
    public function setMaxLoc($maxLoc)
    {
        $this->maxLoc = $maxLoc;
    }

    /**
     * Get maxLoc
     *
     * @return integer
     */
    public function getMaxLoc()
    {
        return $this->maxLoc;
    }

    /**
     * Set validFrom
     *
     * @param  string $validFrom
     * @return void
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
    }

    /**
     * Get validFrom
     *
     * @return string
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validUntil
     *
     * @param  string $validUntil
     * @return void
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
    }

    /**
     * Get validUntil
     *
     * @return string
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Set public
     *
     * @param  boolean $public
     * @return void
     */
    public function setPublic($public)
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

    /**
     * Set org
     *
     * @param  OrgEntity $org
     * @return void
     */
    public function setOrg(OrgEntity $org)
    {
        $this->org = $org;
    }

    /**
     * Get org
     *
     * @return OrgEntity
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * Set notify
     *
     * @param  bool $notify
     * @return void
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;
    }

    /**
     * Get notify
     *
     * @return bool
     */
    public function getNotify()
    {
        return $this->notify;
    }
}
