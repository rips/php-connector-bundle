<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;

class LicenseEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $hardwareId;

    /**
     * @var string
     */
    protected $key;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var boolean
     */
    protected $quotaDistributed;

    /**
     * @var QuotaEntity[]
     */
    protected $quotas;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var LicenseEntity
     */
    protected $parent;

    /**
     * @var LicenseEntity
     */
    protected $child;

    /**
     * @var OrgEntity
     */
    protected $organization;
    
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
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * Set key
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
    
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
     * Get validUntil
     *
     * @return DateTime
     */
    public function getValidUntil()
    {
        return $this->validUntil;
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
     * Get quotaDistributed
     *
     * @return boolean
     */
    public function getQuotaDistributed()
    {
        return $this->quotaDistributed;
    }
    
    /**
     * Set quotaDistributed
     *
     * @param boolean $quotaDistributed
     * @return $this
     */
    public function setQuotaDistributed($quotaDistributed)
    {
        $this->quotaDistributed = $quotaDistributed;
    
        return $this;
    }
    
    /**
     * Get quotas
     *
     * @return QuotaEntity[]
     */
    public function getQuotas()
    {
        return $this->quotas;
    }
    
    /**
     * Set quotas
     *
     * @param QuotaEntity[] $quotas
     * @return $this
     */
    public function setQuotas(array $quotas)
    {
        $this->quotas = $quotas;
    
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
     * Get parent
     *
     * @return LicenseEntity
     */
    public function getParent()
    {
        return $this->parent;
    }
    
    /**
     * Set parent
     *
     * @param LicenseEntity $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }
    
    /**
     * Get child
     *
     * @return LicenseEntity
     */
    public function getChild()
    {
        return $this->child;
    }
    
    /**
     * Set child
     *
     * @param LicenseEntity $child
     * @return $this
     */
    public function setChild($child)
    {
        $this->child = $child;
    
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
