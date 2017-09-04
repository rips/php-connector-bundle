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
    protected $path;

    /**
     * @var int
     */
    protected $phase;

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
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
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
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * Set path
     *
     * @param  string $path
     * @return void
     */
    public function setPath($path)
    {
        $this->path = $path;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * Set phase
     *
     * @param  int $phase
     * @return void
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;
    }

    /**
     * Get phase
     *
     * @return int
     */
    public function getPhase(): int
    {
        return $this->phase;
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
    public function getFile(): FileEntity
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
    public function getScan(): ScanEntity
    {
        return $this->scan;
    }

    /**
     * Set function
     *
     * @param  FunctionEntity $function
     * @return void
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }

    /**
     * Get function
     *
     * @return FunctionEntity
     */
    public function getFunction(): FunctionEntity
    {
        return $this->function;
    }
}
