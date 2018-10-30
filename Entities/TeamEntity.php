<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;

class TeamEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var OrgEntity
     */
    protected $organization;

    /**
     * @var UserEntity[]
     */
    protected $users;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var DateTime
     */
    protected $lastModification;

    /**
     * @var Application\AclEntity[]
     */
    protected $applicationAcls;

    /**
     * @var Quota\AclEntity[]
     */
    protected $quotaAcls;
    
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    
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
     * Get lastModification
     *
     * @return DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
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
     * Get applicationAcls
     *
     * @return Application\AclEntity[]
     */
    public function getApplicationAcls()
    {
        return $this->applicationAcls;
    }
    
    /**
     * Set applicationAcls
     *
     * @param Application\AclEntity[] $applicationAcls
     * @return $this
     */
    public function setApplicationAcls(array $applicationAcls)
    {
        $this->applicationAcls = $applicationAcls;
    
        return $this;
    }
    
    /**
     * Get quotaAcls
     *
     * @return Quota\AclEntity[]
     */
    public function getQuotaAcls()
    {
        return $this->quotaAcls;
    }
    
    /**
     * Set quotaAcls
     *
     * @param Quota\AclEntity[] $quotaAcls
     * @return $this
     */
    public function setQuotaAcls(array $quotaAcls)
    {
        $this->quotaAcls = $quotaAcls;
    
        return $this;
    }
}
