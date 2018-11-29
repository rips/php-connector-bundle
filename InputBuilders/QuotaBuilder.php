<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use DateTime;

class QuotaBuilder extends BaseBuilder
{
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
     * @var int
     */
    protected $organization;

    /**
     * @var boolean
     */
    protected $notify;

    /**
     * @var int[]
     */
    protected $languages;

    /**
     * Set currentApplication
     *
     * @param int $currentApplication
     * @return $this
     */
    public function setCurrentApplication($currentApplication)
    {
        $this->setFields[] = 'currentApplication';
        $this->currentApplication = $currentApplication;
    
        return $this;
    }
    
    /**
     * Set currentScan
     *
     * @param int $currentScan
     * @return $this
     */
    public function setCurrentScan($currentScan)
    {
        $this->setFields[] = 'currentScan';
        $this->currentScan = $currentScan;
    
        return $this;
    }
    
    /**
     * Set currentUser
     *
     * @param int $currentUser
     * @return $this
     */
    public function setCurrentUser($currentUser)
    {
        $this->setFields[] = 'currentUser';
        $this->currentUser = $currentUser;
    
        return $this;
    }
    
    /**
     * Set maxApplications
     *
     * @param int $maxApplications
     * @return $this
     */
    public function setMaxApplications($maxApplications)
    {
        $this->setFields[] = 'maxApplications';
        $this->maxApplications = $maxApplications;
    
        return $this;
    }
    
    /**
     * Set maxScans
     *
     * @param int $maxScans
     * @return $this
     */
    public function setMaxScans($maxScans)
    {
        $this->setFields[] = 'maxScans';
        $this->maxScans = $maxScans;
    
        return $this;
    }
    
    /**
     * Set maxUsers
     *
     * @param int $maxUsers
     * @return $this
     */
    public function setMaxUsers($maxUsers)
    {
        $this->setFields[] = 'maxUsers';
        $this->maxUsers = $maxUsers;
    
        return $this;
    }
    
    /**
     * Set maxLoc
     *
     * @param int $maxLoc
     * @return $this
     */
    public function setMaxLoc($maxLoc)
    {
        $this->setFields[] = 'maxLoc';
        $this->maxLoc = $maxLoc;
    
        return $this;
    }
    
    /**
     * Set validFrom
     *
     * @param DateTime $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->setFields[] = 'validFrom';
        $this->validFrom = $validFrom;
    
        return $this;
    }
    
    /**
     * Set validUntil
     *
     * @param DateTime $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->setFields[] = 'validUntil';
        $this->validUntil = $validUntil;
    
        return $this;
    }
    
    /**
     * Set allowedMisses
     *
     * @param int $allowedMisses
     * @return $this
     */
    public function setAllowedMisses($allowedMisses)
    {
        $this->setFields[] = 'allowedMisses';
        $this->allowedMisses = $allowedMisses;
    
        return $this;
    }
    
    /**
     * Set public
     *
     * @param boolean $public
     * @return $this
     */
    public function setPublic($public)
    {
        $this->setFields[] = 'public';
        $this->public = $public;
    
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

    /**
     * Set notify
     *
     * @param bool $notify
     * @return $this
     */
    public function setNotify($notify)
    {
        $this->setFields[] = 'notify';
        $this->notify = $notify;

        return $this;
    }

    /**
     * Set languages
     *
     * @param int[] $languages
     * @return $this
     */
    public function setLanguages($languages)
    {
        $this->setFields[] = 'languages';
        $this->languages = $languages;

        return $this;
    }
}
