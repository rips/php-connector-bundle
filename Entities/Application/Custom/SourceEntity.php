<?php

namespace RIPS\ConnectorBundle\Application\Custom;

use RIPS\ConnectorBundle\Entities\Application\CustomEntity;

class SourceHydrator
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
    protected $property;

    /**
     * @var string
     */
    protected $parameter;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var CustomEntity
     */
    protected $custom;
    
    /**
     * Get id
     *
     * @return type
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
     * @return int
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
     * Get property
     *
     * @return string
     */
    public function getProperty()
    {
        return $this->property;
    }
    
    /**
     * Set property
     *
     * @param string $property
     * @return $this
     */
    public function setProperty($property)
    {
        $this->property = $property;
    
        return $this;
    }
    
    /**
     * Get parameter
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }
    
    /**
     * Set parameter
     *
     * @param string $parameter
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
    
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
    public function setCustom(CustomEntity $custom)
    {
        $this->custom = $custom;
    
        return $this;
    }
}
