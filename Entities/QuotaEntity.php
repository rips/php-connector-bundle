<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;

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
     * @var int
     */
    protected $allowedMisses;

    /**
     * @var boolean
     */
    protected $public;

    /**
     * @var OrgEntity
     */
    protected $organization;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var LanguageEntity[]
     */
    protected $languages;

    /**
     * @var boolean
     */
    protected $notify;

    /**
     * @var TypeEntity[]
     */
    protected $trialIssueTypes;

    /**
     * @var int
     */
    protected $issueTypeLimit;

    /**
     * @var boolean
     */
    protected $updateOnly;

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
     * Set org
     *
     * @param OrgEntity $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * Get org
     *
     * @return OrgEntity
     */
    public function getOrganization()
    {
        return $this->organization;
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
     * Set languages
     *
     * @param LanguageEntity[] $languages
     * @return $this
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return LanguageEntity[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set notify
     *
     * @param boolean $notify
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->notify = $notify;

        return $this;
    }

    /**
     * Get notify
     *
     * @return boolean
     */
    public function getNotify()
    {
        return $this->notify;
    }

    /**
     * Set trialIssueTypes
     *
     * @param TypeEntity[] $trialIssueTypes
     * @return $this
     */
    public function setTrialIssueTypes($trialIssueTypes)
    {
        $this->trialIssueTypes = $trialIssueTypes;

        return $this;
    }

    /**
     * Get trialIssueTypes
     *
     * @return TypeEntity[]
     */
    public function getTrialIssueTypes()
    {
        return $this->trialIssueTypes;
    }

    /**
     * Set issueTypeLimit
     *
     * @param int $issueTypeLimit
     * @return $this
     */
    public function setIssueTypeLimit($issueTypeLimit)
    {
        $this->issueTypeLimit = $issueTypeLimit;

        return $this;
    }

    /**
     * Get issueTypeLimit
     *
     * @return int
     */
    public function getIssueTypeLimit()
    {
        return $this->issueTypeLimit;
    }

    /**
     * Set updateOnly
     *
     * @param boolean $updateOnly
     * @return $this
     */
    public function setUpdateOnly($updateOnly)
    {
        $this->updateOnly = $updateOnly;

        return $this;
    }

    /**
     * Get updateOnly
     *
     * @return boolean
     */
    public function getUpdateOnly()
    {
        return $this->updateOnly;
    }
}
