<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Custom;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class SourceBuilder extends BaseBuilder
{
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
}
