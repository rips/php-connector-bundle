<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink\TypeEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

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
     * @var int
     */
    protected $startColumn;

    /**
     * @var int
     */
    protected $endColumn;

    /**
     * @var TypeEntity
     */
    protected $type;

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
    public function setFile($file)
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
    public function setScan($scan)
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
    public function setFunction($function)
    {
        $this->function = $function;
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
     * @return void
     */
    public function setClass($class)
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

    /**
     * Get start column
     *
     * @return int
     */
    public function getStartColumn()
    {
        return $this->startColumn;
    }

    /**
     * Set start column
     *
     * @param int $startColumn
     * @return $this
     */
    public function setStartColumn(int $startColumn)
    {
        $this->startColumn = $startColumn;

        return $this;
    }

    /**
     * Get end column
     *
     * @return int
     */
    public function getEndColumn()
    {
        return $this->endColumn;
    }

    /**
     * Set end column
     *
     * @param int $endColumn
     * @return $this
     */
    public function setEndColumn(int $endColumn)
    {
        $this->endColumn = $endColumn;

        return $this;
    }

    /**
     * Get type
     *
     * @return TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param TypeEntity $type
     * @return $this
     */
    public function setType(TypeEntity $type)
    {
        $this->type = $type;

        return $this;
    }
}
