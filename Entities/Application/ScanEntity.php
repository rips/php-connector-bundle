<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\ComparisonEntity;
use RIPS\ConnectorBundle\Entities\LanguageEntity;
use RIPS\ConnectorBundle\Entities\ServerEntity;
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
    protected $startedAt;

    /**
     * @var DateTime
     */
    protected $finishedAt;

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
     * @var string
     */
    protected $sourceType;

    /**
     * @var Scan\ProcessEntity[]
     */
    protected $processes;

    /**
     * @var Scan\PhpEntity
     */
    protected $php;

    /**
     * @var Scan\JavaEntity
     */
    protected $java;

    /**
     * @var Scan\DigestEntity
     */
    protected $digest;

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
     * @var ProfileEntity
     */
    protected $profile;

    /**
     * @var Scan\Issue\TypeEntity[]
     */
    protected $issueTypes;

    /**
     * @var ScanEntity
     */
    protected $parent;

    /**
     * @var array
     */
    protected $severityDistributions;

    /**
     * @var int
     */
    protected $analysisDepth;

    /**
     * @var array
     */
    protected $tags;

    /**
     * @var int
     */
    protected $maxIssuesPerType;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var Scan\LibraryEntity[]
     */
    protected $libraries;

    /**
     * @var LanguageEntity[]
     */
    protected $languages;

    /**
     * @var ComparisonEntity
     */
    protected $comparison;

    /**
     * @var string
     */
    protected $rootPath;

    /**
     * @var string
     */
    protected $rootFile;

    /**
     * @var ServerEntity
     */
    protected $server;

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
     * Set startedAt
     *
     * @param DateTime $startedAt
     * @return $this
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * Get startedAt
     *
     * @return DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * Set finishedAt
     *
     * @param DateTime $finishedAt
     * @return $this
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * Get finishedAt
     *
     * @return DateTime
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
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
     * Set sourceType
     *
     * @param string $sourceType
     * @return $this
     */
    public function setSourceType($sourceType)
    {
        $this->sourceType = $sourceType;

        return $this;
    }

    /**
     * Get process
     *
     * @return string
     */
    public function getSourceType()
    {
        return $this->sourceType;
    }

    /**
     * Set processes
     *
     * @param Scan\ProcessEntity[] $processes
     * @return $this
     */
    public function setProcesses($processes)
    {
        $this->processes = $processes;

        return $this;
    }

    /**
     * Get processes
     *
     * @return Scan\ProcessEntity[]
     */
    public function getProcesses()
    {
        return $this->processes;
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
     * Set java object
     *
     * @param Scan\JavaEntity $java
     * @return $this
     */
    public function setJava(Scan\JavaEntity $java)
    {
        $this->java = $java;

        return $this;
    }

    /**
     * Get java object
     *
     * @return Scan\JavaEntity
     */
    public function getJava()
    {
        return $this->java;
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
     * Set profile
     *
     * @param ProfileEntity $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;

        return $this;
    }

    /**
     * Get profile
     *
     * @return ProfileEntity
     */
    public function getProfile()
    {
        return $this->profile;
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
     * Set analysisDepth
     *
     * @param int $analysisDepth
     * @return $this
     */
    public function setAnalysisDepth($analysisDepth)
    {
        $this->analysisDepth = $analysisDepth;

        return $this;
    }

    /**
     * Get analysisDepth
     *
     * @return int
     */
    public function getAnalysisDepth()
    {
        return $this->analysisDepth;
    }

    /**
     * Set tags
     *
     * @param array $tags
     * @return $this
     */
    public function setTags($tags)
    {
        $this->tags = $tags;

        return $this;
    }

    /**
     * Get tags
     *
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Set maxIssuesPerType
     *
     * @param int $maxIssuesPerType
     * @return $this
     */
    public function setMaxIssuesPerType($maxIssuesPerType)
    {
        $this->maxIssuesPerType = $maxIssuesPerType;

        return $this;
    }

    /**
     * Get maxIssuesPerType
     *
     * @return int
     */
    public function getMaxIssuesPerType()
    {
        return $this->maxIssuesPerType;
    }

    /**
     * Set comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set libraries
     *
     * @param Scan\LibraryEntity[] $libraries
     * @return $this
     */
    public function setLibraries(array $libraries)
    {
        $this->libraries = $libraries;

        return $this;
    }

    /**
     * Get libraries
     *
     * @return Scan\LibraryEntity[]
     */
    public function getLibraries()
    {
        return $this->libraries;
    }

    /**
     * Set languages
     *
     * @param LanguageEntity[] $languages
     * @return $this
     */
    public function setLanguages(array $languages)
    {
        $this->languages = $languages;

        return $this;
    }

    /**
     * Get languages
     *
     * @return LanguageEntity[]
     */
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set scan comparison
     *
     * @param ComparisonEntity $comparison
     * @return $this
     */
    public function setComparison(ComparisonEntity $comparison)
    {
        $this->comparison = $comparison;

        return $this;
    }

    /**
     * Get scan comparison
     *
     * @return ComparisonEntity
     */
    public function getComparison()
    {
        return $this->comparison;
    }

    /**
     * @return Scan\DigestEntity
     */
    public function getDigest()
    {
        return $this->digest;
    }

    /**
     * @param Scan\DigestEntity $digest
     * @return ScanEntity
     */
    public function setDigest($digest)
    {
        $this->digest = $digest;

        return $this;
    }

    /**
     * Set rootFile
     *
     * @param string $rootFile
     * @return $this
     */
    public function setRootFile($rootFile)
    {
        $this->rootFile = $rootFile;

        return $this;
    }

    /**
     * Get rootFile
     *
     * @return string
     */
    public function getRootFile()
    {
        return $this->rootFile;
    }

    /**
     * Set rootPath
     *
     * @param string $rootPath
     * @return $this
     */
    public function setRootPath($rootPath)
    {
        $this->rootPath = $rootPath;

        return $this;
    }

    /**
     * Get rootPath
     *
     * @return string
     */
    public function getRootPath()
    {
        return $this->rootPath;
    }

    /**
     * Set server
     *
     * @param ServerEntity $server
     * @return $this
     */
    public function setServer($server)
    {
        $this->server = $server;

        return $this;
    }

    /**
     * Get server
     *
     * @return ServerEntity
     */
    public function getServer()
    {
        return $this->server;
    }
}
