<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;

class QuotaEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $currentApplication;

    /**
     * @var int
     */
    protected $currentScan;

    /**
     * @var int
     */
    protected $currentUser;

    /**
     * @var int
     */
    protected $maxApplications;

    /**
     * @var int
     */
    protected $maxScans;

    /**
     * @var int
     */
    protected $maxUsers;

    /**
     * @var int
     */
    protected $maxLoc;

    /**
     * @var DateTime
     */
    protected $validFrom;

    /**
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var DateTime
     */
    protected $lastModification;

    /**
     * @var int
     */
    protected $allowedMisses;

    /**
     * @var boolean
     */
    protected $public;

    /**
     * @var LicenseEntity
     */
    protected $license;

    /**
     * @var Application\ScanEntity[]
     */
    protected $scans;

    /**
     * @var ApplicationEntity[]
     */
    protected $applications;

    /**
     * @var UserEntity[]
     */
    protected $users;

    /**
     * @var Quota\AclEntity[]
     */
    protected $acls;

    /**
     * @var OrgEntity
     */
    protected $organisation;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set currentApplication
     *
     * @param int $currentApp
     * @return $this
     */
    public function setCurrentApplication($currentApp)
    {
        $this->currentApplication = $currentApp;

        return $this;
    }

    /**
     * Get currentApplication
     *
     * @return int
     */
    public function getCurrentApplication()
    {
        return $this->currentApplication;
    }

    /**
     * Set currentScan
     *
     * @param int $currentScan
     * @return $this
     */
    public function setCurrentScan($currentScan)
    {
        $this->currentScan = $currentScan;

        return $this;
    }

    /**
     * Get currentScan
     *
     * @return int
     */
    public function getCurrentScan()
    {
        return $this->currentScan;
    }

    /**
     * Set currentUser
     *
     * @param int $currentUser
     * @return $this
     */
    public function setCurrentUser($currentUser)
    {
        $this->currentUser = $currentUser;

        return $this;
    }

    /**
     * Get currentUser
     *
     * @return int
     */
    public function getCurrentUser()
    {
        return $this->currentUser;
    }

    /**
     * Set maxApplications
     *
     * @param int $maxApplications
     * @return $this
     */
    public function setMaxApplications($maxApplications)
    {
        $this->maxApplications = $maxApplications;

        return $this;
    }

    /**
     * Get maxApplications
     *
     * @return int
     */
    public function getMaxApplications()
    {
        return $this->maxApplications;
    }

    /**
     * Set maxScans
     *
     * @param int $maxScans
     * @return $this
     */
    public function setMaxScans($maxScans)
    {
        $this->maxScans = $maxScans;

        return $this;
    }

    /**
     * Get maxScans
     *
     * @return int
     */
    public function getMaxScans()
    {
        return $this->maxScans;
    }

    /**
     * Set maxUsers
     *
     * @param int $maxUsers
     * @return $this
     */
    public function setMaxUsers($maxUsers)
    {
        $this->maxUsers = $maxUsers;

        return $this;
    }

    /**
     * Get maxUsers
     *
     * @return int
     */
    public function getMaxUsers()
    {
        return $this->maxUsers;
    }

    /**
     * Set maxLoc
     *
     * @param int $maxLoc
     * @return $this
     */
    public function setMaxLoc($maxLoc)
    {
        $this->maxLoc = $maxLoc;

        return $this;
    }

    /**
     * Get maxLoc
     *
     * @return int
     */
    public function getMaxLoc()
    {
        return $this->maxLoc;
    }

    /**
     * Set validFrom
     *
     * @param DateTime $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;

        return $this;
    }

    /**
     * Get validFrom
     *
     * @return DateTime
     */
    public function getValidFrom()
    {
        return $this->validFrom;
    }

    /**
     * Set validUntil
     *
     * @param DateTime $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
    }

    /**
     * Set lastModification
     *
     * @param DateTime $lastModification
     * @return $this
     */
    public function setLastModification($lastModification)
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * Get lastModification
     *
     * @return DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }

    /**
     * Set allowedMisses
     *
     * @param int $allowedMisses
     * @return $this
     */
    public function setAllowedMisses($allowedMisses)
    {
        $this->allowedMisses = $allowedMisses;

        return $this;
    }

    /**
     * Get allowedMisses
     *
     * @return int
     */
    public function getAllowedMisses()
    {
        return $this->allowedMisses;
    }

    /**
     * Set public
     *
     * @param boolean $public
     * @return $this
     */
    public function setPublic($public)
    {
        $this->public = $public;

        return $this;
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
     * Set license
     *
     * @param LicenseEntity $license
     * @return $this
     */
    public function setLicense($license)
    {
        $this->license = $license;

        return $this;
    }

    /**
     * Get license
     *
     * @return LicenseEntity
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set scans
     *
     * @param Application\ScanEntity[] $scans
     * @return $this
     */
    public function setScans(array $scans)
    {
        $this->scans = $scans;

        return $this;
    }

    /**
     * Get scans
     *
     * @return Application\ScanEntity[]
     */
    public function getScans()
    {
        return $this->scans;
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
     * Get users
     *
     * @return UserEntity[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set acls
     *
     * @param Quota\AclEntity[] $acls
     * @return $this
     */
    public function setAcls(array $acls)
    {
        $this->acls = $acls;

        return $this;
    }

    /**
     * Get acls
     *
     * @return Quota\AclEntity[]
     */
    public function getAcls()
    {
        return $this->acls;
    }

    /**
     * Set org
     *
     * @param OrgEntity $organisation
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;

        return $this;
    }

    /**
     * Get org
     *
     * @return OrgEntity
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
}
