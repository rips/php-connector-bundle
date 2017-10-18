<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Custom;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class IgnoreBuilder extends BaseBuilder
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
    
    /**
     * Set folder
     *
     * @param string $folder
     * @return $this
     */
    public function setFolder($folder)
    {
        $this->setFields[] = 'folder';
        $this->folder = $folder;
    
        return $this;
    }
    
    /**
     * Set fullPath
     *
     * @param string $fullPath
     * @return $this
     */
    public function setFullPath($fullPath)
    {
        $this->setFields[] = 'fullPath';
        $this->fullPath = $fullPath;
    
        return $this;
    }
}
