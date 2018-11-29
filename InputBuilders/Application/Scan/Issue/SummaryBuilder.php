<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class SummaryBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $line;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var int
     */
    protected $file;

    /**
     * @var int
     */
    protected $function;

    /**
     * @var int
     */
    protected $class;

    /**
     * Set line
     *
     * @param int $line
     * @return $this
     */
    public function setLine($line)
    {
        $this->setFields[] = 'line';
        $this->line = $line;
    
        return $this;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->setFields[] = 'content';
        $this->content = $content;

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
     * Set function
     *
     * @param int $function
     * @return $this
     */
    public function setFunction($function)
    {
        $this->setFields[] = 'function';
        $this->function = $function;

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
