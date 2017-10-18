<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class CustomFunctionEntity
{
    /**
     * @var int
     */
    protected $id;

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
     * @var FileEntity
     */
    protected $file;

    /**
     * @var CustomClassEntity
     */
    protected $class;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var SourceEntity[]
     */
    protected $sources;

    /**
     * @var SinkEntity[]
     */
    protected $sinks;

    /**
     * @var ConcatEntity[]
     */
    protected $concats;

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
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * Set sources
     *
     * @param SourceEntity[] $sources
     * @return $this
     */
    public function setSources(array $sources)
    {
        $this->sources = $sources;

        return $this;
    }

    /**
     * Get sources
     *
     * @return SourceEntity[]
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Set sinks
     *
     * @param SinkEntity[] $sinks
     * @return $this
     */
    public function setSinks(array $sinks)
    {
        $this->sinks = $sinks;

        return $this;
    }

    /**
     * Get sinks
     *
     * @return SinkEntity[]
     */
    public function getSinks()
    {
        return $this->sinks;
    }

    /**
     * Set concats
     *
     * @param ConcatEntity[] $concats
     * @return $this
     */
    public function setConcats(array $concats)
    {
        $this->concats = $concats;

        return $this;
    }

    /**
     * Get concats
     *
     * @return ConcatEntity[]
     */
    public function getConcats()
    {
        return $this->concats;
    }
}
