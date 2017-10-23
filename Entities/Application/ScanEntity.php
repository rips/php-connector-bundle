<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Entities\QuotaEntity;

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
     * @var DateTime
     */
    protected $start;

    /**
     * @var DateTime
     */
    protected $finish;

    /**
     * @var DateTime
     */
    protected $lastModification;

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
     * @var boolean
     */
    protected $codeStored;

    /**
     * @var boolean
     */
    protected $uploadRemoved;

    /**
     * @var boolean
     */
    protected $fullCodeCompared;

    /**
     * @var boolean
     */
    protected $historyInherited;

    /**
     * @var Scan\ProcessEntity
     */
    protected $process;

    /**
     * @var Scan\PhpEntity
     */
    protected $php;

    /**
     * @var Scan\SourceEntity[]
     */
    protected $sources;

    /**
     * @var Scan\SinkEntity[]
     */
    protected $sinks;

    /**
     * @var Scan\ConcatEntity[]
     */
    protected $concats;

    /**
     * @var Scan\FileEntity[]
     */
    protected $files;

    /**
     * @var Scan\CustomFunctionEntity[]
     */
    protected $functions;

    /**
     * @var Scan\CustomClassEntity[]
     */
    protected $classes;

    /**
     * @var Scan\IssueEntity[]
     */
    protected $issues;

    /**
     * @var UploadEntity
     */
    protected $upload;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var QuotaEntity
     */
    protected $chargedQuota;

    /**
     * @var CustomEntity
     */
    protected $custom;

    /**
     * @var Scan\Issue\TypeEntity[]
     */
    protected $issueTypes;

    /**
     * @var ScanEntity
     */
    protected $parent;

    /**
     * @var ScanEntity[]
     */
    protected $children;

    /**
     * @var array
     */
    protected $severityDistributions;

    /**
     * @var array
     */
    protected $callbacks;

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
     * Set Version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get Version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set path
     *
     * @param string
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
     * Set start
     *
     * @param DateTime $start
     * @return $this
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set finish
     *
     * @param DateTime $finish
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;

        return $this;
    }

    /**
     * Get finish
     *
     * @return DateTime
     */
    public function getFinish()
    {
        return $this->finish;
    }

    /**
     * Set lastModification
     *
     * @param DateTime $lastModification
     * @return $this
     */
    public function setLastModification($lastModification)
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * Get lastModification
     *
     * @return DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }

    /**
     * Set phase
     *
     * @param int
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * Get phase
     *
     * @return int
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * Set Percentage
     *
     * @param int $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->percent = $percent;

        return $this;
    }

    /**
     * Get Percentage
     *
     * @return int
     */
    public function getPercent()
    {
        return $this->percent;
    }

    /**
     * Set loc (Lines of Code)
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
     * Get loc (Lines of Code)
     *
     * @return int
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set codeStored
     *
     * @param boolean $codeStored
     * @return $this
     */
    public function setCodeStored($codeStored)
    {
        $this->codeStored = $codeStored;

        return $this;
    }

    /**
     * Get codeStored
     *
     * @return boolean
     */
    public function getCodeStored()
    {
        return $this->codeStored;
    }

    /**
     * Set uploadRemoved
     *
     * @param boolean $uploadRemoved
     * @return $this
     */
    public function setUploadRemoved($uploadRemoved)
    {
        $this->uploadRemoved = $uploadRemoved;

        return $this;
    }

    /**
     * Get codeStored
     *
     * @return boolean
     */
    public function getUploadRemoved()
    {
        return $this->uploadRemoved;
    }

    /**
     * Set fullCodeCompared
     *
     * @param boolean $fullCodeCompared
     * @return $this
     */
    public function setFullCodeCompared($fullCodeCompared)
    {
        $this->fullCodeCompared = $fullCodeCompared;

        return $this;
    }

    /**
     * Get fullCodeCompared
     *
     * @return boolean
     */
    public function getFullCodeCompared()
    {
        return $this->fullCodeCompared;
    }

    /**
     * Set historyInherited
     *
     * @param boolean $historyInherited
     * @return $this
     */
    public function setHistoryInherited($historyInherited)
    {
        $this->historyInherited = $historyInherited;

        return $this;
    }

    /**
     * Get historyInherited
     *
     * @return boolean
     */
    public function getHistoryInherited()
    {
        return $this->historyInherited;
    }

    /**
     * Set process
     *
     * @param Scan\ProcessEntity $process
     * @return $this
     */
    public function setProcess($process)
    {
        $this->process = $process;

        return $this;
    }

    /**
     * Get process
     *
     * @return Scan\ProcessEntity
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Set php object
     *
     * @param Scan\PhpEntity $php
     * @return $this
     */
    public function setPhp($php)
    {
        $this->php = $php;

        return $this;
    }

    /**
     * Get php object
     *
     * @return Scan\PhpEntity
     */
    public function getPhp()
    {
        return $this->php;
    }

    /**
     * Set sources
     *
     * @param Scan\SourceEntity[] $sources
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
     * @return Scan\SourceEntity[]
     */
    public function getSources()
    {
        return $this->sources;
    }

    /**
     * Set sinks
     *
     * @param Scan\SinkEntity[] $sinks
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
     * @return Scan\SinkEntity[]
     */
    public function getSinks()
    {
        return $this->sinks;
    }

    /**
     * Set concats
     *
     * @param Scan\ConcatEntity[] $concats
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
     * @return Scan\ConcatEntity[]
     */
    public function getConcats()
    {
        return $this->concats;
    }

    /**
     * Set files
     *
     * @param Scan\FileEntity[] $files
     * @return $this
     */
    public function setFiles(array $files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * Get files
     *
     * @return Scan\FileEntity[]
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * Set functions
     *
     * @param Scan\CustomFunctionEntity[] $functions
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
     * @return Scan\CustomFunctionEntity[]
     */
    public function getFunctions()
    {
        return $this->functions;
    }

    /**
     * Set classes
     *
     * @param Scan\CustomClassEntity[] $classes
     * @return $this
     */
    public function setClasses(array $classes)
    {
        $this->classes = $classes;

        return $this;
    }

    /**
     * Get classes
     *
     * @return Scan\CustomClassEntity[]
     */
    public function getClasses()
    {
        return $this->classes;
    }

    /**
     * Set issues
     *
     * @param Scan\IssueEntity[] $issues
     * @return $this
     */
    public function setIssues(array $issues)
    {
        $this->issues = $issues;

        return $this;
    }

    /**
     * Get issues
     *
     * @return Scan\IssueEntity[]
     */
    public function getIssues()
    {
        return $this->issues;
    }

    /**
     * Set upload
     *
     * @param UploadEntity $upload
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->upload = $upload;

        return $this;
    }

    /**
     * Get upload
     *
     * @return UploadEntity
     */
    public function getUpload()
    {
        return $this->upload;
    }

    /**
     * Set applicationEntity
     *
     * @param ApplicationEntity $application
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get applicationEntity
     *
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set chargedQuota
     *
     * @param QuotaEntity $chargedQuota
     * @return $this
     */
    public function setChargedQuota($chargedQuota)
    {
        $this->chargedQuota = $chargedQuota;

        return $this;
    }

    /**
     * Get chargedQuota
     *
     * @return QuotaEntity
     */
    public function getChargedQuota()
    {
        return $this->chargedQuota;
    }

    /**
     * Set custom
     *
     * @param CustomEntity $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;

        return $this;
    }

    /**
     * Get custom
     *
     * @return CustomEntity
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * Set issueTypes
     *
     * @param Scan\Issue\TypeEntity[] $issueTypes
     * @return $this
     */
    public function setIssueTypes(array $issueTypes)
    {
        $this->issueTypes = $issueTypes;

        return $this;
    }

    /**
     * Get issueTypes
     *
     * @return Scan\Issue\TypeEntity[]
     */
    public function getIssueTypes()
    {
        return $this->issueTypes;
    }

    /**
     * Set parent
     *
     * @param ScanEntity $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /**
     * Get parent
     *
     * @return ScanEntity
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set children
     *
     * @param ScanEntity[] $children
     * @return $this
     */
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Get children
     *
     * @return ScanEntity[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set severityDistributions
     *
     * @param array $severityDistributions
     * @return $this
     */
    public function setSeverityDistributions(array $severityDistributions)
    {
        $this->severityDistributions = $severityDistributions;

        return $this;
    }

    /**
     * Get severityDistributions
     *
     * @return array
     */
    public function getSeverityDistributions()
    {
        return $this->severityDistributions;
    }

    /**
     * Set callbacks
     *
     * @param array $callbacks
     * @return $this
     */
    public function setCallbacks(array $callbacks)
    {
        $this->callbacks = $callbacks;

        return $this;
    }

    /**
     * Get callbacks
     *
     * @return array
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
}
