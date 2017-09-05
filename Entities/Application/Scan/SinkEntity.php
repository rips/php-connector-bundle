<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\FileEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\CustomFunctionEntity;

class SinkEntity
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
    protected $name;

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
     * @return void
     */
    public function setLine($line)
    {
        $this->line = $line;
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
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set file
     *
     * @param  FileEntity $file
     * @return void
     */
    public function setFile(FileEntity $file)
    {
        $this->file = $file;
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
     * @param  ScanEntity $scan
     * @return void
     */
    public function setScan(ScanEntity $scan)
    {
        $this->scan = $scan;
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
     * @return void
     */
    public function setFunction(FileEntity $function)
    {
        $this->function = $function;
    }

    /**
     * Get function
     *
     * @return FunctionEntity
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set class
     *
     * @param CustomClassEntity $class
     * @return void
     */
    public function setClass(CustomClassEntity $class)
    {
        $this->class = $class;
    }

    /**
     * Set issues
     *
     * @param IssueEntity[] $issues
     * @return void
     */
    public function setIssues($issues)
    {
        $this->issues = $issues;
    }

    /**
     * Get issues
     *
     * @return IssueEntity[]
     */
    public function getIssues()
    {
        return $this->issues;
    }
}
