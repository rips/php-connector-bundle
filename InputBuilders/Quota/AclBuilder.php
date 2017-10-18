<?php

namespace RIPS\ConnectorBundle\InputBuilders\Quota;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class AclBuilder extends BaseBuilder
{
    /**
     * @var integer
     */
    protected $ownerUser;

    /**
     * @var integer
     */
    protected $ownerTeam;

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
     * Set ownerUser
     *
     * @param integer $ownerUser
     * @return $this
     */
    public function setOwnerUser($ownerUser)
    {
        $this->ownerUser = $ownerUser;
    
        return $this;
    }
    
    /**
     * Set ownerTeam
     *
     * @param integer $ownerTeam
     * @return $this
     */
    public function setOwnerTeam($ownerTeam)
    {
        $this->ownerTeam = $ownerTeam;
    
        return $this;
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
}
