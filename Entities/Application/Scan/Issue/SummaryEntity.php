<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan;

class SummaryEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $line;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $highlightedContent;

    /**
     * @var Scan\FileEntity
     */
    protected $file;

    /**
     * @var Scan\CustomFunctionEntity
     */
    protected $function;

    /**
     * @var Scan\CustomClassEntity
     */
    protected $class;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set line
     *
     * @param  int $line
     * @return $this
     */
    public function setLine($line)
    {
        $this->line = $line;

        return $this;
    }

    /**
     * Get line
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set content
     *
     * @param  string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set highlightedContent
     *
     * @param  string $highlightedContent
     * @return $this
     */
    public function setHighlightedContent($highlightedContent)
    {
        $this->highlightedContent = $highlightedContent;

        return $this;
    }

    /**
     * Get highlightedContent
     *
     * @return string
     */
    public function getHighlightedContent()
    {
        return $this->highlightedContent;
    }

    /**
     * Set file
     *
     * @param Scan\FileEntity $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return Scan\FileEntity
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set function
     *
     * @param Scan\CustomFunctionEntity $function
     * @return $this
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function
     *
     * @return Scan\CustomFunctionEntity
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set class
     *
     * @param Scan\CustomClassEntity $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return Scan\CustomClassEntity
     */
    public function getClass()
    {
        return $this->class;
    }
}
