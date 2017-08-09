<?php

namespace RIPS\ConnectorBundle\Entities;

class QuotaEntity
{
    // @var integer
    protected $id;

    // @var integer
    protected $current_application;

    // @var integer
    protected $current_scan;

    // @var integer
    protected $current_user;

    // @var integer
    protected $max_applications;

    // @var integer
    protected $max_scans;

    // @var integer
    protected $max_users;

    // @var string
    protected $valid_from;

    // @var string
    protected $valid_until;

    // @var boolean
    protected $public;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setCurrentApplication(int $currentApp)
    {
        $this->current_application = $currentApp;
    }

    public function getCurrentApplication()
    {
        return $this->current_application;
    }

    public function setCurrentScan(int $currentScan)
    {
        $this->current_scan = $currentScan;
    }

    public function getCurrentScan()
    {
        return $this->current_scan;
    }

    public function setCurrentUser(int $currentUser)
    {
        $this->current_user = $currentUser;
    }

    public function getCurrentUser(int $currentUser)
    {
        return $this->current_user;
    }

    public function setMaxApplications(int $maxApplications)
    {
        $this->max_applications = $maxApplications;
    }

    public function getMaxApplications()
    {
        return $this->max_applications;
    }

    public function setMaxScans(int $maxScans)
    {
        return $this->max_scans = $maxScans;
    }

    public function getMaxScans()
    {
        return $this->max_scans;
    }

    public function setMaxUsers(int $maxUsers)
    {
        $this->max_users = $maxUsers;
    }

    public function getMaxUsers()
    {
        return $this->max_users;
    }

    public function setValidFrom(string $validFrom)
    {
        $this->valid_from = $validFrom;
    }

    public function getValidFrom()
    {
        return $this->valid_from;
    }

    public function setValidUntil(string $validUntil)
    {
        $this->valid_until = $validUntil;
    }

    public function setPublic(bool $public)
    {
        $this->public = $public;
    }
    
    public function getPublic()
    {
        return $this->public;
    }
}
