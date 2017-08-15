<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class QuotaBuilder extends BaseBuilder
{
    // @var int
    protected $allowedMisses;

    // @var int
    protected $currentApplication;

    // @var int
    protected $currentScan;

    // @var int
    protected $currentUser;

    // @var int
    protected $maxApplications;

    // @var int
    protected $maxLoc;

    // @var int
    protected $maxScans;

    // @var int
    protected $maxUsers;

    // @var int
    protected $organisation;

    // @var bool
    protected $public;

    // @var string
    protected $validFrom;

    // @var string
    protected $validUntil;

    /**
     * Set allowedMisses
     *
     * @param int
     * @return void
     */
    public function setAllowedMisses(int $allowedMisses)
    {
        $this->allowedMisses = $allowedMisses;
    }

    /**
     * Set currentApplication
     *
     * @param int $currentApplication
     * @return void
     */
    public function setCurrentApplication(int $currentApplication)
    {
        $this->currentApplication = $currentApplication;
    }

    /**
     * Set currentScan
     *
     * @param int $currentScan
     * @return void
     */
    public function setCurrentScan(int $currentScan)
    {
        $this->currentScan = $currentScan;
    }

    /**
     * Set currentUser
     *
     * @param int $currentScan
     * @return void
     */
    public function setCurrentScan(int $currentScan)
    {
        $this->currentScan = $currentScan;
    }

    /**
     * Set maxApplications
     *
     * @param int $maxApplications
     * @return void
     */
    public function setMaxApplications(int $maxApplications)
    {
        $this->maxApplications = $maxApplications;
    }

    /**
     * Set maxLoc
     *
     * @param int $maxLoc
     * @return void
     */
    public function setMaxLoc(int $maxLoc)
    {
        $this->maxLoc = $maxLoc;
    }

    /**
     * Set maxScans
     *
     * @param int $maxScans
     * @return void
     */
    public function setMaxScans(int $maxScans)
    {
        $this->maxScans = $maxScans;
    }

    /**
     * Set maxUsers
     *
     * @param int $maxUsers
     * @return void
     */
    public function setMaxUsers(int $maxUsers)
    {
        $this->maxUsers = $maxUsers;
    }

    /**
     * Set organisation
     *
     * @param int $organisation
     * @return void
     */
    public function setOrganisation(int $organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * Set public
     *
     * @param bool $public
     * @return void
     */
    public function setPublic(bool $public)
    {
        $this->public = $public
    }

    /**
     * Set validFrom
     *
     * @param string $validFrom
     * @return void
     */
    public function setValidFrom(string $validFrom)
    {
        $this->validFrom = $validFrom;
    }

    /**
     * Set validUntil
     *
     * @param string $validUntil
     * @return void
     */
    public function setValidUntil(string $validUntil)
    {
        $this->validUntil = $validUntil;
    }
}
