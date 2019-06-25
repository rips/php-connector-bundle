<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Scan\Pitfall\TypeEntity;

class PitfallEntity
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
     * @var int
     */
    protected $startLine;

    /**
     * @var int
     */
    protected $endLine;

    /**
     * @var FileEntity
     */
    protected $file;

    /**
     * @var CustomFunctionEntity
     */
    protected $function;

    /**
     * @var CustomClassEntity
     */
    protected $class;

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
     * Set startLine
     *
     * @param int $startLine
     * @return $this
     */
    public function setStartLine($startLine)
    {
        $this->startLine = $startLine;

        return $this;
    }

    /**
     * Get startLine
     *
     * @return int
     */
    public function getStartLine()
    {
        return $this->startLine;
    }

    /**
     * Set endLine
     *
     * @param int $endLine
     * @return $this
     */
    public function setEndLine($endLine)
    {
        $this->endLine = $endLine;

        return $this;
    }

    /**
     * Get endLine
     *
     * @return int
     */
    public function getEndLine()
    {
        return $this->endLine;
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
     * Get class
     *
     * @return CustomClassEntity
     */
    public function getClass()
    {
        return $this->class;
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
     * Get start column
     *
     * @return int
     */
    public function getStartColumn()
    {
        return $this->startColumn;
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
     * Get end column
     *
     * @return int
     */
    public function getEndColumn()
    {
        return $this->endColumn;
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

    /**
     * Get type
     *
     * @return TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }
}
