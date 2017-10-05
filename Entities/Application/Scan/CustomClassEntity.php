<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class CustomClassEntity
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
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var CustomFunctionEntity[]
     */
    protected $functions;

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
     * Set startLine
     *
     * @param int $startLine
     * @return void
     */
    public function setStartLine($startLine)
    {
        $this->startLine = $startLine;
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
     * @return void
     */
    public function setEndLine($endLine)
    {
        $this->endLine = $endLine;
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
     * @param FileEntity $file
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
     * @param ScanEntity $scan
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
     * Set functions
     *
     * @param CustomFunctionEntity[] $functions
     * @return void
     */
    public function setFunctions(array $functions)
    {
        $this->functions = $functions;
    }

    /**
     * Get functions
     *
     * @return CustomFunctionEntity[]
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * Set sources
     *
     * @param SourceEntity[]
     * @return void
     */
    public function setSources(array $sources)
    {
        $this->sources = $sources;
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
     * @return void
     */
    public function setSinks(array $sinks)
    {
        $this->sinks = $sinks;
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
     * @return void
     */
    public function setConcats(array $concats)
    {
        $this->concats = $concats;
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
