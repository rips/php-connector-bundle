<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;

class UploadEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $extension;

    /**
     * @var int
     */
    protected $size;

    /**
     * @var string
     */
    protected $file;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var ScanEntity[]
     */
    protected $scans;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var boolean
     */
    protected $consumed;

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
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
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
     * Set extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set size
     *
     * @param int $size
     * @return $this
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * Get size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * Set file
     *
     * @param string $file
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
     * @return string
     */
    public function getFile()
    {
        return $this->file;
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
    public function getScans()
    {
        return $this->scans;
    }

    /**
     * Set application
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
     * Get application
     *
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set consumed
     *
     * @param boolean $consumed
     * @return $this
     */
    public function setConsumed($consumed)
    {
        $this->consumed = $consumed;

        return $this;
    }

    /**
     * Get consumed
     *
     * @return boolean
     */
    public function getConsumed()
    {
        return $this->consumed;
    }
}
