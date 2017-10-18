<?php

namespace RIPS\ConnectorBundle\Entities\Application\Custom;

use RIPS\ConnectorBundle\Entities\Application\CustomEntity;

class IgnoreEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $folder;

    /**
     * @var string
     */
    protected $fullPath;

    /**
     * @var CustomEntity
     */
    protected $custom;
    
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
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
    
    /**
     * Set class
     *
     * @param string $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
    
        return $this;
    }
    
    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
    
    /**
     * Set method
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
    
        return $this;
    }
    
    /**
     * Get string
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }
    
    /**
     * Get folder
     *
     * @return string
     */
    public function getFolder()
    {
        return $this->folder;
    }
    
    /**
     * Set folder
     *
     * @param string $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->folder = $folder;
    
        return $this;
    }
    
    /**
     * Get fullPath
     *
     * @return string
     */
    public function getFullPath()
    {
        return $this->fullPath;
    }
    
    /**
     * Set fullPath
     *
     * @param string $fullPath
     * @return $this
     */
    public function setFullPath($fullPath)
    {
        $this->fullPath = $fullPath;
    
        return $this;
    }
    
    /**
     * Get custom
     *
     * @return CustomEntity
     */
    public function getCustom()
    {
        return $this->custom;
    }
    
    /**
     * Set custom
     *
     * @param CustomEntity $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    
        return $this;
    }
}
