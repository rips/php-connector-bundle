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
    protected $organisation;
    
    /**
     * Set currentApplication
     *
     * @param int $currentApplication
     * @return $this
     */
    public function setCurrentApplication($currentApplication)
    {
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
        $this->maxLoc = $maxLoc;
    
        return $this;
    }
    
    /**
     * Set validFrom
     *
     * @param string $validFrom
     * @return $this
     */
    public function setValidFrom($validFrom)
    {
        $this->validFrom = $validFrom;
    
        return $this;
    }
    
    /**
     * Set validUntil
     *
     * @param string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
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
        $this->public = $public;
    
        return $this;
    }
    
    /**
     * Set organisation
     *
     * @param int $organisation
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    
        return $this;
    }
}
