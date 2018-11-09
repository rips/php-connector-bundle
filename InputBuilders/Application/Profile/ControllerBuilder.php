<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Profile;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ControllerBuilder extends BaseBuilder
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
        $this->setFields[] = 'class';
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
        $this->setFields[] = 'method';
        $this->method = $method;
    
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
        $this->setFields[] = 'parameter';
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
        $this->setFields[] = 'type';
        $this->type = $type;
    
        return $this;
    }
}
