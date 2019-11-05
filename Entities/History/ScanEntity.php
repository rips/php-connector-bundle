<?php

namespace RIPS\ConnectorBundle\Entities\History;

use RIPS\ConnectorBundle\Entities\History\Scan\Issue\TypeEntity;
use RIPS\ConnectorBundle\Entities\History\Scan\JavaEntity;
use RIPS\ConnectorBundle\Entities\History\Scan\LibraryEntity;
use RIPS\ConnectorBundle\Entities\History\Scan\PhpEntity;

class ScanEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $scanId;

    /**
     * @var int
     */
    protected $applicationId;

    /**
     * @var int
     */
    protected $organizationId;

    /**
     * @var string
     */
    protected $organizationName;

    /**
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * @var \DateTime|null
     */
    protected $finishedAt;

    /**
     * @var int
     */
    protected $phase;

    /**
     * @var int|null
     */
    protected $loc;

    /**
     * @var boolean
     */
    protected $customProfile;

    /**
     * @var int|null
     */
    protected $files;

    /**
     * @var int|null
     */
    protected $knownFunctions;

    /**
     * @var int|null
     */
    protected $knownClasses;

    /**
     * @var int|null
     */
    protected $unresolvedFunctions;

    /**
     * @var int|null
     */
    protected $unresolvedClasses;

    /**
     * @var int|null
     */
    protected $processTime;

    /**
     * @var int|null
     */
    protected $processMemory;

    /**
     * @var int|null
     */
    protected $queueTime;

    /**
     * @var LibraryEntity[]
     */
    protected $libraries;

    /**
     * @var TypeEntity[]
     */
    protected $issueTypes;

    /**
     * @var PhpEntity|null
     */
    protected $php;

    /**
     * @var JavaEntity|null
     */
    protected $java;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ScanEntity
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getScanId()
    {
        return $this->scanId;
    }

    /**
     * @param int $scanId
     * @return ScanEntity
     */
    public function setScanId($scanId)
    {
        $this->scanId = $scanId;

        return $this;
    }

    /**
     * @return int
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }

    /**
     * @param int $applicationId
     * @return ScanEntity
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;

        return $this;
    }

    /**
     * @return int
     */
    public function getOrganizationId()
    {
        return $this->organizationId;
    }

    /**
     * @param int $organizationId
     * @return ScanEntity
     */
    public function setOrganizationId($organizationId)
    {
        $this->organizationId = $organizationId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrganizationName()
    {
        return $this->organizationName;
    }

    /**
     * @param string $organizationName
     * @return ScanEntity
     */
    public function setOrganizationName($organizationName)
    {
        $this->organizationName = $organizationName;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * @param \DateTime $startedAt
     * @return ScanEntity
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFinishedAt()
    {
        return $this->finishedAt;
    }

    /**
     * @param \DateTime|null $finishedAt
     * @return ScanEntity
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * @return int
     */
    public function getPhase()
    {
        return $this->phase;
    }

    /**
     * @param int $phase
     * @return ScanEntity
     */
    public function setPhase($phase)
    {
        $this->phase = $phase;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @param int|null $loc
     * @return ScanEntity
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * @return bool
     */
    public function isCustomProfile()
    {
        return $this->customProfile;
    }

    /**
     * @param bool $customProfile
     * @return ScanEntity
     */
    public function setCustomProfile($customProfile)
    {
        $this->customProfile = $customProfile;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @param int|null $files
     * @return ScanEntity
     */
    public function setFiles($files)
    {
        $this->files = $files;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getKnownFunctions()
    {
        return $this->knownFunctions;
    }

    /**
     * @param int|null $knownFunctions
     * @return ScanEntity
     */
    public function setKnownFunctions($knownFunctions)
    {
        $this->knownFunctions = $knownFunctions;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getKnownClasses()
    {
        return $this->knownClasses;
    }

    /**
     * @param int|null $knownClasses
     * @return ScanEntity
     */
    public function setKnownClasses($knownClasses)
    {
        $this->knownClasses = $knownClasses;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUnresolvedFunctions()
    {
        return $this->unresolvedFunctions;
    }

    /**
     * @param int|null $unresolvedFunctions
     * @return ScanEntity
     */
    public function setUnresolvedFunctions($unresolvedFunctions)
    {
        $this->unresolvedFunctions = $unresolvedFunctions;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getUnresolvedClasses()
    {
        return $this->unresolvedClasses;
    }

    /**
     * @param int|null $unresolvedClasses
     * @return ScanEntity
     */
    public function setUnresolvedClasses($unresolvedClasses)
    {
        $this->unresolvedClasses = $unresolvedClasses;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProcessTime()
    {
        return $this->processTime;
    }

    /**
     * @param int|null $processTime
     * @return ScanEntity
     */
    public function setProcessTime($processTime)
    {
        $this->processTime = $processTime;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getProcessMemory()
    {
        return $this->processMemory;
    }

    /**
     * @param int|null $processMemory
     * @return ScanEntity
     */
    public function setProcessMemory($processMemory)
    {
        $this->processMemory = $processMemory;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQueueTime()
    {
        return $this->queueTime;
    }

    /**
     * @param int|null $queueTime
     * @return ScanEntity
     */
    public function setQueueTime($queueTime)
    {
        $this->queueTime = $queueTime;

        return $this;
    }

    /**
     * @return LibraryEntity[]
     */
    public function getLibraries()
    {
        return $this->libraries;
    }

    /**
     * @param LibraryEntity[] $libraries
     * @return ScanEntity
     */
    public function setLibraries($libraries)
    {
        $this->libraries = $libraries;

        return $this;
    }

    /**
     * @return TypeEntity[]
     */
    public function getIssueTypes()
    {
        return $this->issueTypes;
    }

    /**
     * @param TypeEntity[] $issueTypes
     * @return ScanEntity
     */
    public function setIssueTypes($issueTypes)
    {
        $this->issueTypes = $issueTypes;

        return $this;
    }

    /**
     * @return PhpEntity|null
     */
    public function getPhp()
    {
        return $this->php;
    }

    /**
     * @param PhpEntity|null $php
     * @return ScanEntity
     */
    public function setPhp($php)
    {
        $this->php = $php;

        return $this;
    }

    /**
     * @return JavaEntity|null
     */
    public function getJava()
    {
        return $this->java;
    }

    /**
     * @param JavaEntity|null $java
     * @return ScanEntity
     */
    public function setJava($java)
    {
        $this->java = $java;

        return $this;
    }
}
