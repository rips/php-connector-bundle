<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Profile;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class IgnoredCodeBuilder extends BaseBuilder
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
    protected $exclude;

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
     * Set exclude
     *
     * @param string $exclude
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->setFields[] = 'exclude';
        $this->exclude = $exclude;
    
        return $this;
    }
}
