<?php

namespace RIPS\ConnectorBundle\Entities\Application\Profile;

class IgnoredCodeEntity
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
    protected $exclude;

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
    public function getExclude()
    {
        return $this->exclude;
    }
    
    /**
     * Set exclude
     *
     * @param string $exclude
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
    
        return $this;
    }
}
