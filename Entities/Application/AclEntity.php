<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\TeamEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;

class AclEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var UserEntity
     */
    protected $ownerUser;

    /**
     * @var TeamEntity
     */
    protected $ownerTeam;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var boolean
     */
    protected $view;

    /**
     * @var boolean
     */
    protected $delete;

    /**
     * @var boolean
     */
    protected $create;

    /**
     * @var boolean
     */
    protected $edit;

    /**
     * @var boolean
     */
    protected $scan;

    /**
     * @var boolean
     */
    protected $manage;

    /**
     * @var boolean
     */
    protected $immutable;
    
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
     * Get ownerUser
     *
     * @return UserEntity
     */
    public function getOwnerUser()
    {
        return $this->ownerUser;
    }
    
    /**
     * Set ownerUser
     *
     * @param UserEntity $ownerUser
     * @return $this
     */
    public function setOwnerUser($ownerUser)
    {
        $this->ownerUser = $ownerUser;
    
        return $this;
    }
    
    /**
     * Get ownerTeam
     *
     * @return TeamEntity
     */
    public function getOwnerTeam()
    {
        return $this->ownerTeam;
    }
    
    /**
     * Set ownerTeam
     *
     * @param TeamEntity $ownerTeam
     * @return $this
     */
    public function setOwnerTeam($ownerTeam)
    {
        $this->ownerTeam = $ownerTeam;
    
        return $this;
    }
    
    /**
     * Get application
     *
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }
    
    /**
     * Set application
     *
     * @param ApplicationEntity $application
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;
    
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
     * Get view
     *
     * @return boolean
     */
    public function getView()
    {
        return $this->view;
    }
    
    /**
     * Set view
     *
     * @param boolean $view
     * @return $this
     */
    public function setView($view)
    {
        $this->view = $view;
    
        return $this;
    }
    
    /**
     * Get delete
     *
     * @return boolean
     */
    public function getDelete()
    {
        return $this->delete;
    }
    
    /**
     * Set delete
     *
     * @param boolean $delete
     * @return $this
     */
    public function setDelete($delete)
    {
        $this->delete = $delete;
    
        return $this;
    }
    
    /**
     * Get create
     *
     * @return boolean
     */
    public function getCreate()
    {
        return $this->create;
    }
    
    /**
     * Set create
     *
     * @param boolean $create
     * @return $this
     */
    public function setCreate($create)
    {
        $this->create = $create;
    
        return $this;
    }
    
    /**
     * Get edit
     *
     * @return boolean
     */
    public function getEdit()
    {
        return $this->edit;
    }
    
    /**
     * Set edit
     *
     * @param boolean $edit
     * @return $this
     */
    public function setEdit($edit)
    {
        $this->edit = $edit;
    
        return $this;
    }
    
    /**
     * Get scan
     *
     * @return boolean
     */
    public function getScan()
    {
        return $this->scan;
    }
    
    /**
     * Set scan
     *
     * @param boolean $scan
     * @return $this
     */
    public function setScan($scan)
    {
        $this->scan = $scan;
    
        return $this;
    }
    
    /**
     * Get manage
     *
     * @return boolean
     */
    public function getManage()
    {
        return $this->manage;
    }
    
    /**
     * Set manage
     *
     * @param boolean $manage
     * @return $this
     */
    public function setManage($manage)
    {
        $this->manage = $manage;
    
        return $this;
    }
    
    /**
     * Get immutable
     *
     * @return boolean
     */
    public function getImmutable()
    {
        return $this->immutable;
    }
    
    /**
     * Set immutable
     *
     * @param boolean $immutable
     * @return $this
     */
    public function setImmutable($immutable)
    {
        $this->immutable = $immutable;
    
        return $this;
    }
}
