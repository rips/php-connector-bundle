<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

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
     * @var TaintEntity
     */
    protected $taint;

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
     * Set taint
     *
     * @param TaintEntity $taint
     * @return $this
     */
    public function setTaint(TaintEntity $taint)
    {
        $this->taint = $taint;

        return $this;
    }

    /**
     * Get taint
     *
     * @return TaintEntity
     */
    public function getTaint()
    {
        return $this->taint;
    }
}
