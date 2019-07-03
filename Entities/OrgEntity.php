<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;

class OrgEntity
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
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var QuotaEntity[]
     */
    protected $quotas;

    /**
     * @var TypeEntity[]
     */
    protected $trialIssueTypes;

    /**
     * @var bool
     */
    protected $disabled;

    /**
     * @var int
     */
    protected $concurrentScans;

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
     * @return integer
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
     * Set quotas
     *
     * @param QuotaEntity[] $quotas
     * @return void
     */
    public function setQuotas(array $quotas = [])
    {
        $this->quotas = $quotas;
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
     * Set disabled
     *
     * @param bool $disabled
     * @return $this
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * Get disabled
     *
     * @return bool
     */
    public function isDisabled()
    {
        return $this->disabled;
    }

    /**
     * Set concurrentScans
     *
     * @param  int $concurrentScans
     * @return $this
     */
    public function setConcurrentScans($concurrentScans)
    {
        $this->concurrentScans = $concurrentScans;

        return $this;
    }

    /**
     * Get concurrentScans
     *
     * @return int
     */
    public function getConcurrentScans()
    {
        return $this->concurrentScans;
    }
}
