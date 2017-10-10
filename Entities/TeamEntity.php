<?php

namespace RIPS\ConnectorBundle\Entities;

use \DateTime;
use RIPS\ConnectorBundle\Entities\OrgansiationEntity;
use RIPS\ConnectorBundle\Entities\UserEntity;

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
     * @var OrganisationEntity
     */
    protected $organisation;

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
     * @var ApplicationAclEntity[]
     */
    protected $applicationAcls;

    /**
     * @var QuotaAclEntity[]
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
     * Get organisation
     *
     * @return OrganisationEntity
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }
    
    /**
     * Set organisation
     *
     * @param OrganisationEntity $organisation
     * @return $this
     */
    public function setOrganisation(OrgansiationEntity $organisation)
    {
        $this->organisation = $organisation;
    
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
    public function setCreatedBy(UserEntity $createdBy)
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
    public function setLastModification(DateTime $lastModification)
    {
        $this->lastModification = $lastModification;
    
        return $this;
    }
    
    /**
     * Get applicationAcls
     *
     * @return ApplicationAclEntity[]
     */
    public function getApplicationAcls()
    {
        return $this->applicationAcls;
    }
    
    /**
     * Set applicationAcls
     *
     * @param ApplicationAclEntity[] $applicationAcls
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
     * @return QuotaAclEntity[]
     */
    public function getQuotaAcls()
    {
        return $this->quotaAcls;
    }
    
    /**
     * Set quotaAcls
     *
     * @param QuotaAclEntity[] $quotaAcls
     * @return $this
     */
    public function setQuotaAcls(array $quotaAcls)
    {
        $this->quotaAcls = $quotaAcls;
    
        return $this;
    }
}
