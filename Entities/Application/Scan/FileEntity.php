<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class FileEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $loc;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var boolean
     */
    protected $scanned;

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
     * @var CustomFunctions
     */
    protected $functions;

    /**
     * @var CustomClassEntity[]
     */
    protected $classes;

    /**
     * @var SummaryEntity[]
     */
    protected $summaries;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var string
     */
    protected $code;

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
     * Set loc (lines of code)
     *
     * @param int $loc
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return int
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set scanned
     *
     * @param boolean $scanned
     * @return $this
     */
    public function setScanned($scanned)
    {
        $this->scanned = $scanned;

        return $this;
    }

    /**
     * Get scanned
     *
     * @return boolean
     */
    public function getScanned()
    {
        return $this->scanned;
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

    /**
     * Set functions
     *
     * @param CustomFunctionEntity[] $functions
     * @return $this
     */
    public function setFunctions(array $functions)
    {
        $this->functions = $functions;

        return $this;
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
     * Set classes
     *
     * @param CustomClassEntity[] $classes
     * @return $this
     */
    public function setClasses(array $customClassEntity)
    {
        $this->classes = $classes;

        return $this;
    }

    /**
     * Get classes
     *
     * @return CustomClassEntity[]
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Set summaries
     *
     * @param SummaryEntity[] $summaries
     * @return $this
     */
    public function setSummaries(array $summaries)
    {
        $this->summaries = $summaries;

        return $this;
    }

    /**
     * Get summaries
     *
     * @return SummaryEntity[]
     */
    public function getSummaries()
    {
        return $this->summaries;
    }

    /**
     * Set scan
     *
     * @param ScanEntity $scan
     * @return $this
     */
    public function setScan(ScanEntity $scan)
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
     * Set code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
