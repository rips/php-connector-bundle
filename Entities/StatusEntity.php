<?php

namespace RIPS\ConnectorBundle\Entities;

class StatusEntity
{
    /**
     * @var string
     */
    protected $version;

    /**
     * @var boolean
     */
    protected $cloud;

    /**
     * @var boolean
     */
    protected $maintenance;

    /**
     * @var string
     */
    protected $hardwareId;

    /**
     * @var CensusEntity
     */
    protected $census;

    /**
     * @var array
     */
    protected $trialIssueTypes;

    /**
     * @var UserEntity
     */
    protected $user;

    /**
     * @var OrgEntity
     */
    protected $organization;

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }
    
    /**
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }
    
    /**
     * Get cloud
     *
     * @return boolean
     */
    public function getCloud()
    {
        return $this->cloud;
    }
    
    /**
     * Set cloud
     *
     * @param boolean $cloud
     * @return $this
     */
    public function setCloud($cloud)
    {
        $this->cloud = $cloud;
    
        return $this;
    }
    
    /**
     * Get maintenance
     *
     * @return boolean
     */
    public function getMaintenance()
    {
        return $this->maintenance;
    }
    
    /**
     * Set maintenance
     *
     * @param boolean $maintenance
     * @return $this
     */
    public function setMaintenance($maintenance)
    {
        $this->maintenance = $maintenance;
    
        return $this;
    }
    
    /**
     * Get hardwareId
     *
     * @return string
     */
    public function getHardwareId()
    {
        return $this->hardwareId;
    }
    
    /**
     * Set hardwareId
     *
     * @param string $hardwareId
     * @return $this
     */
    public function setHardwareId($hardwareId)
    {
        $this->hardwareId = $hardwareId;
    
        return $this;
    }
    
    /**
     * Get census
     *
     * @return CensusEntity
     */
    public function getCensus()
    {
        return $this->census;
    }
    
    /**
     * Set census
     *
     * @param CensusEntity $census
     * @return $this
     */
    public function setCensus($census)
    {
        $this->census = $census;
    
        return $this;
    }
    
    /**
     * Get trialIssueTypes
     *
     * @return array
     */
    public function getTrialIssueTypes()
    {
        return $this->trialIssueTypes;
    }
    
    /**
     * Set trialIssueTypes
     *
     * @param array $trialIssueTypes
     * @return $this
     */
    public function setTrialIssueTypes(array $trialIssueTypes)
    {
        $this->trialIssueTypes = $trialIssueTypes;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param UserEntity $user
     * @return $this
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get organization
     *
     * @return OrgEntity
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set organization
     *
     * @param OrgEntity $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;

        return $this;
    }
}
