<?php

namespace RIPS\ConnectorBundle\Entities;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Type\ResourceEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class LanguageEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $fileExtensions;

    /**
     * @var array
     */
    protected $configFileExtensions;

    /**
     * @var array
     */
    protected $archiveExtensions;

    /**
     * @var TypeEntity[]
     */
    protected $issueTypes;

    /**
     * @var ResourceEntity[]
     */
    protected $resources;

    /**
     * @var ScanEntity[]
     */
    protected $scans;

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
     * Set file extensions
     *
     * @param array $fileExtensions
     * @return $this
     */
    public function setFileExtensions(array $fileExtensions = [])
    {
        $this->fileExtensions = $fileExtensions;

        return $this;
    }

    /**
     * Get file extensions
     *
     * @return array
     */
    public function getFileExtensions()
    {
        return $this->fileExtensions;
    }

    /**
     * Set config file extensions
     *
     * @param array $configFileExtensions
     * @return $this
     */
    public function setConfigFileExtensions(array $configFileExtensions)
    {
        $this->configFileExtensions = $configFileExtensions;

        return $this;
    }

    /**
     * Get config file extensions
     *
     * @return array
     */
    public function getConfigFileExtensions()
    {
        return $this->configFileExtensions;
    }

    /**
     * Set archive extensions
     *
     * @param array $archiveExtensions
     * @return $this
     */
    public function setArchiveExtensions(array $archiveExtensions)
    {
        $this->archiveExtensions = $archiveExtensions;

        return $this;
    }

    /**
     * Get archive extensions
     *
     * @return array
     */
    public function getArchiveExtensions()
    {
        return $this->archiveExtensions;
    }

    /**
     * Set issue types
     *
     * @param TypeEntity[] $issueTypes
     * @return $this
     */
    public function setIssueTypes(array $issueTypes)
    {
        $this->issueTypes = $issueTypes;

        return $this;
    }

    /**
     * Get issue types
     *
     * @return TypeEntity[]
     */
    public function getIssueTypes()
    {
        return $this->issueTypes;
    }

    /**
     * Set resources
     *
     * @param ResourceEntity[] $resources
     */
    public function setResources(array $resources)
    {
        $this->resources = $resources;
    }

    /**
     * Get resources
     *
     * @return ResourceEntity[]
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * Set scans
     *
     * @param ScanEntity[] $scans
     * @return $this
     */
    public function setScans(array $scans)
    {
        $this->scans = $scans;

        return $this;
    }

    /**
     * Get scans
     *
     * @return ScanEntity[]
     */
    public function getScans(): array
    {
        return $this->scans;
    }
}
