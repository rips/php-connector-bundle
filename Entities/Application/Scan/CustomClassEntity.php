<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

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
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return void
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set startLine
     *
     * @param int $startLine
     * @return void
     */
    public function setStartLine(int $startLine)
    {
        $this->startLine = $startLine;
    }

    /**
     * Get startLine
     *
     * @return int
     */
    public function getStartLine(): int
    {
        return $this->startLine;
    }

    /**
     * Set endLine
     *
     * @param int $endLine
     * @return void
     */
    public function setEndLine(int $endLine)
    {
        $this->endLine = $endLine;
    }

    /**
     * Get endLine
     *
     * @return int
     */
    public function getEndLine(): int
    {
        return $this->endLine;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
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
    public function getFile(): FileEntity
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
    public function getScan(): ScanEntity
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
    public function getFunctions(): array
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
    public function getSources(): array
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
    public function getSinks(): array
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
    public function getConcats(): array
    {
        return $this->concats;
    }
}
