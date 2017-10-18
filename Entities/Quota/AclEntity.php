<?php

namespace RIPS\ConnectorBundle\Entities\Quota;

use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\TeamEntity;
use RIPS\ConnectorBundle\Entities\QuotaEntity;

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
     * @var QuotaEntity
     */
    protected $quota;

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
    protected $use;

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
    public function setOwnerUser(UserEntity $ownerUser)
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
    public function setOwnerTeam(TeamEntity $ownerTeam)
    {
        $this->ownerTeam = $ownerTeam;
    
        return $this;
    }
    
    /**
     * Get quota
     *
     * @return QuotaEntity
     */
    public function getQuota()
    {
        return $this->quota;
    }

    /**
     * Set quota
     *
     * @param QuotaEntity $quota
     * @return $this
     */
    public function setQuota(QuotaEntity $quota)
    {
        $this->quota = $quota;
    
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
     * Get use
     *
     * @return boolean
     */
    public function getUse()
    {
        return $this->use;
    }
    
    /**
     * Set use
     *
     * @param boolean $use
     * @return $this
     */
    public function setUse($use)
    {
        $this->use = $use;
    
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
