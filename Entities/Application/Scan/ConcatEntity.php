<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class ConcatEntity
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
     * @var FileEntity
     */
    protected $file;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var CustomFunctionEntity
     */
    protected $function;

    /**
     * @var CustomClassEntity
     */
    protected $class;

    /**
     * @var IssueEntity[]
     */
    protected $issues;

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
     * @param int $line
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
     * Set file
     *
     * @param FileEntity $file
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
     * @return FileEntity
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Set scan
     *
     * @param ScanEntity $scan
     * @return $this
     */
    public function setScan($scan)
    {
        $this->scan = $scan;

        return $this;
    }

    /**
     * Get scan
     *
     * @return ScanEntity
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * Set function
     *
     * @param CustomFunctionEntity $function
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
     * @return CustomFunctionEntity
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set class
     *
     * @param CustomClassEntity $class
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
     * @return CustomClassEntity
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set issues
     *
     * @param IssueEntity[] $issues
     * @return $this
     */
    public function setIssues(array $issues)
    {
        $this->issues = $issues;

        return $this;
    }

    /**
     * Get issue
     *
     * @return IssueEntity[]
     */
    public function getIssues()
    {
        return $this->issues;
    }
}
