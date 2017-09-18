<?php

namespace RIPS\ConnectorBundle\Entities;

class ApplicationEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $currentScan;

    /**
     * @var string
     */
    protected $creation;

    /**
     * @var OrgEntity
     */
    protected $organisation;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var QuotaEntity
     */
    protected $chargedQuota;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set name
     *
     * @param  string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set currentScan
     *
     * @param  int
     * @return void
     */
    public function setCurrentScan($currentScan)
    {
        $this->currentScan = $currentScan;
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
     * Set creation
     *
     * @param  string
     * @return void
     */
    public function setCreation($creation)
    {
        $this->creation = $creation;
    }

    /**
     * Get creation
     *
     * @return string
     */
    public function getCreation()
    {
        return $this->creation;
    }

    /**
     * Set organisation
     *
     * @param  OrgEntity
     * @return void
     */
    public function setOrganisation(OrgEntity $org)
    {
        $this->organisation = $org;
    }

    /**
     * Get organisation
     *
     * @return OrgEntity
     */
    public function getOrganisation()
    {
        return $this->organisation;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return void
     */
    public function setCreatedBy(UserEntity $createdBy)
    {
        $this->createdBy = $createdBy;
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
     * Set chargedQuota
     *
     * @param QuotaEntity $chargedQuota
     * @return void
     */
    public function setChargedQuota(QuotaEntity $chargedQuota)
    {
        $this->chargedQuota = $chargedQuota;
    }

    /**
     * Get chargedQuota
     *
     * @return QuotaEntity
     */
    public function getChargedQuota()
    {
        return $this->chargedQuota;
    }
}
