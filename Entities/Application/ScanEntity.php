<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Entities\UserEntity;

class ScanEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var int
     */
    protected $phase;

    /**
     * @var int
     */
    protected $percent;

    /**
     * @var int
     */
    protected $loc;

    /**
     * @var  boolean
     */
    protected $codeStored;

    /**
     * @var  boolean
     */
    protected $uploadRemoved;

    /**
     * @var  int
     */
    protected $analysisDepth;

    /**
     * @var PhpEntity
     */
    protected $php;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var ProcessEntity
     */
    protected $process;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set Version
     *
     * @param  string $version
     * @return void
     */
    public function setVersion(string $version)
    {
        $this->version = $version;
    }

    /**
     * Get Version
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }

    /**
     * Set path
     *
     * @param string
     * @return void
     */
    public function setPath(string $path)
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
     * @param int
     * @return void
     */
    public function setPhase(int $phase)
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
     * Set Percentage
     *
     * @param  integer $percent
     * @return void
     */
    public function setPercent(int $percent)
    {
        $this->percent = $percent;
    }

    /**
     * Get Percentage
     *
     * @return integer
     */
    public function getPercent(): int
    {
        return $this->percent;
    }

    /**
     * Set loc (Lines of Code)
     *
     * @param  integer $loc
     * @return void
     */
    public function setLoc(int $loc)
    {
        $this->loc = $loc;
    }

    /**
     * Get loc (Lines of Code)
     *
     * @return integer
     */
    public function getLoc(): int
    {
        return $this->loc;
    }

    /**
     * Set codeStored
     *
     * @param  boolean $codeStored
     * @return void
     */
    public function setCodeStored(bool $codeStored)
    {
        $this->codeStored = $codeStored;
    }

    /**
     * Get codeStored
     *
     * @return boolean
     */
    public function getCodeStored(): bool
    {
        return $this->codeStored;
    }

    /**
     * Set uploadRemoved
     *
     * @param  boolean $uploadRemoved
     * @return void
     */
    public function setUploadRemoved(bool $uploadRemoved)
    {
        $this->uploadRemoved = $uploadRemoved;
    }

    /**
     * Get codeStored
     *
     * @return boolean
     */
    public function getUploadRemoved(): bool
    {
        return $this->uploadRemoved;
    }

    /**
     * Set analysisDepth
     *
     * @param  integer $analysisDepth
     * @return void
     */
    public function setAnalysisDepth(int $analysisDepth)
    {
        $this->analysisDepth = $analysisDepth;
    }

    /**
     * Get analysisDepth
     *
     * @return integer
     */
    public function getAnalysisDepth(): int
    {
        return $this->analysisDepth;
    }

    /**
     * Set php object
     *
     * @param PHPEntity
     * @return void
     */
    public function setPhp(PhpEntity $php)
    {
        $this->php = $php;
    }

    /**
     * Get php object
     *
     * @return PhpEntity
     */
    public function getPhp(): PhpEntity
    {
        return $this->php;
    }

    /**
     * Set applicationEntity
     *
     * @param $application
     * @return void
     */
    public function setApplication(ApplicationEntity $application)
    {
        $this->application = $application;
    }

    /**
     * Get applicationEntity
     *
     * @return ApplicationEntity
     */
    public function getApplication(): ApplicationEntity
    {
        return $this->application;
    }

    /**
     * Set createdBy
     *
     * @param $createdBy
     * @return void
     */
    public function setCreatedBy(UserEntity $createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy(): UserEntity
    {
        return $this->createdBy;
    }

    /**
     * Set process
     *
     * @param $process
     * @return void
     */
    public function setProcess(ProcessEntity $process)
    {
        $this->process = $process;
    }

    /**
     * Get process
     *
     * @return ProcessEntity
     */
    public function getProcess(): ProcessEntity
    {
        return $this->process;
    }
}
