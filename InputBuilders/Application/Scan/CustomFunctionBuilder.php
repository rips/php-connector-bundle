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
     * @var int
     */
    protected $startColumn;

    /**
     * @var int
     */
    protected $endColumn;

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
     * @var array
     */
    protected $parameters;
    
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
     * Set startColumn
     *
     * @param int $startColumn
     * @return $this
     */
    public function setStartColumn($startColumn)
    {
        $this->setFields[] = 'startColumn';
        $this->startColumn = $startColumn;

        return $this;
    }

    /**
     * Set endColumn
     *
     * @param int $endColumn
     * @return $this
     */
    public function setEndColumn($endColumn)
    {
        $this->setFields[] = 'endColumn';
        $this->endColumn = $endColumn;

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

    /**
     * Set parameters
     *
     * @param array $parameters
     * @return $this
     */
    public function setParameters($parameters)
    {
        $this->setFields[] = 'parameters';
        $this->parameters = $parameters;

        return $this;
    }
}
