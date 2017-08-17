<?php

namespace RIPS\ConnectorBundle\Entities;

class QuotaEntity
{
    // @var integer
    protected $id;

    // @var integer
    protected $currentpplication;

    // @var integer
    protected $currentScan;

    // @var integer
    protected $currentUser;

    // @var integer
    protected $maxApplications;

    // @var integer
    protected $maxScans;

    // @var integer
    protected $maxUsers;

    // @var string
    protected $validFrom;

    // @var string
    protected $validUntil;

    // @var boolean
    protected $public;

    /**
     * Set id
     *
     * @param  integer $id
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
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set currentApplication
     *
     * @param  integer $currentApp
     * @return void
     */
    public function setCurrentApplication(int $currentApp)
    {
        $this->currentApplication = $currentApp;
    }

    /**
     * Get currentApplication
     *
     * @return integer
     */
    public function getCurrentApplication(): int
    {
        return $this->currentApplication;
    }

    /**
     * Set currentScan
     *
     * @param  integer $currentScan
     * @return void
     */
    public function setCurrentScan(int $currentScan)
    {
        $this->currentScan = $currentScan;
    }

    /**
     * Get currentScan
     *
     * @return integer
     */
    public function getCurrentScan(): int
    {
        return $this->currentScan;
    }

    /**
     * Set currentUser
     *
     * @param  integer $currentUser
     * @return void
     */
    public function setCurrentUser(int $currentUser)
    {
        $this->currentUser = $currentUser;
    }

    /**
     * Get currentUser
     *
     * @return integer
     */
    public function getCurrentUser(): int
    {
        return $this->currentUser;
    }

    /**
     * Set maxApplications
     *
     * @param  integer $maxApplications
     * @return void
     */
    public function setMaxApplications(int $maxApplications)
    {
        $this->maxApplications = $maxApplications;
    }

    /**
     * Get maxApplications
     *
     * @return integer
     */
    public function getMaxApplications(): int
    {
        return $this->maxApplications;
    }

    /**
     * Set maxScans
     *
     * @param  integer $maxScans
     * @return void
     */
    public function setMaxScans(int $maxScans)
    {
        return $this->maxScans = $maxScans;
    }

    /**
     * Get maxScans
     *
     * @return integer
     */
    public function getMaxScans(): int
    {
        return $this->maxScans;
    }

    /**
     * Set maxUsers
     *
     * @param  integer $maxUsers
     * @return void
     */
    public function setMaxUsers(int $maxUsers)
    {
        $this->maxUsers = $maxUsers;
    }

    /**
     * Get maxUsers
     *
     * @return integer
     */
    public function getMaxUsers(): int
    {
        return $this->maxUsers;
    }

    /**
     * Set validFrom
     *
     * @param  string $validFrom
     * @return void
     */
    public function setValidFrom(string $validFrom)
    {
        $this->validFrom = $validFrom;
    }

    /**
     * Get validFrom
     *
     * @return string
     */
    public function getValidFrom(): string
    {
        return $this->validFrom;
    }

    /**
     * Set validUntil
     *
     * @param  string $validUntil
     * @return void
     */
    public function setValidUntil(string $validUntil)
    {
        $this->validUntil = $validUntil;
    }

    /**
     * Get validUntil
     *
     * @return string
     */
    public function getValidUntil(): string
    {
        return $this->validUntil;
    }

    /**
     * Set public
     *
     * @param  boolean $public
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
    public function getPublic(): bool
    {
        return $this->public;
    }
}
