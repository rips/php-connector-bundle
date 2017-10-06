<?php

namespace RIPS\ConnectorBundle\Entities;

use \DateTime;

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
     * @var ScanEntity[]
     */
    protected $scans;

    /**
     * @var int
     */
    protected $currentScan;

    /**
     * @var CustomEntity[]
     */
    protected $customs;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var QuotaEntity
     */
    protected $chargedQuota;

    /**
     * @var UploadEntity[]
     */
    protected $uploads;

    /**
     * @var AclEntity[]
     */
    protected $acls;

    /**
     * @var DateTime
     */
    protected $creation;

    /**
     * @var DateTime
     */
    protected $lastModification;

    /**
     * @var OrgEntity
     */
    protected $organisation;

    /**
     * @var boolean
     */
    protected $trial = false;

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set scans
     *
     * @param ScanEntity[] $scans
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
     * @return ScanEntity[]
     */
    public function getScans()
    {
        return $this->scans;
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
     * Set customs
     *
     * @param CustomEntity[] $customs
     * @return $this
     */
    public function setCustoms(array $customs)
    {
        $this->customs = $customs;

        return $this;
    }

    /**
     * Get customs
     *
     * @return CustomEntity
     */
    public function getCustoms()
    {
        return $this->customs;
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

    /**
     * Set uploads
     *
     * @param UploadEntity[] $uploads
     * @return $this
     */
    public function setUploads(array $uploads)
    {
        $this->uploads = $uploads;

        return $this;
    }

    /**
     * Get uploads
     *
     * @return UploadEntity[]
     */
    public function getUploads()
    {
        return $this->uploads;
    }

    /**
     * Set acls
     *
     * @param AclEntity[] $acls
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
     * @return AclEntity[]
     */
    public function getAcls()
    {
        return $this->acls;
    }

    /**
     * Set creation
     *
     * @param DateTime
     * @return $this
     */
    public function setCreation(DateTime $creation)
    {
        $this->creation = $creation;

        return $this;
    }

    /**
     * Get creation
     *
     * @return DateTime
     */
    public function getCreation()
    {
        return $this->creation;
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
     * Get lastModification
     *
     * @return DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }

    /**
     * Set organisation
     *
     * @param OrgEntity
     * @return $this
     */
    public function setOrganisation(OrgEntity $org)
    {
        $this->organisation = $org;

        return $this;
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
     * Set trial
     *
     * @param boolean $trail
     * @return $this
     */
    public function setTrial($trial)
    {
        $this->trial = $trial;
    }

    /**
     * Get trial
     *
     * @return boolean
     */
    public function getTrial()
    {
        return $this->trial;
    }
}
