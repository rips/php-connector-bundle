<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class CustomFunctionBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $startLine;

    /**
     * @var int
     */
    protected $endLine;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $file;

    /**
     * @var int
     */
    protected $class;
    
    /**
     * Set startLine
     *
     * @param int $startLine
     * @return $this
     */
    public function setStartLine($startLine)
    {
        $this->setFields[] = 'startLine';
        $this->startLine = $startLine;
    
        return $this;
    }
    
    /**
     * Set endLine
     *
     * @param int $endLine
     * @return $this
     */
    public function setEndLine($endLine)
    {
        $this->setFields[] = 'endLine';
        $this->endLine = $endLine;
    
        return $this;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setFields[] = 'name';
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * Set file
     *
     * @param int $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->setFields[] = 'file';
        $this->file = $file;
    
        return $this;
    }
    
    /**
     * Set class
     *
     * @param int $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->setFields[] = 'class';
        $this->class = $class;
    
        return $this;
    }
}
