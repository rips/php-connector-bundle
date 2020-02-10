<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\ProcessEntity;
use RIPS\ConnectorBundle\Entities\UserEntity;

class ArtifactEntity
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
    protected $path;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var ProcessEntity
     */
    protected $process;

    /**
     * @var bool
     */
    protected $incompatible;

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
     * Set scan
     *
     * @param ScanEntity $scan
     * @return $this
     */
    public function setScan($scan)
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
     * @return ProcessEntity
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * @param ProcessEntity $process
     * @return ArtifactEntity
     */
    public function setProcess($process)
    {
        $this->process = $process;

        return $this;
    }

    /**
     * @return bool
     */
    public function isIncompatible()
    {
        return $this->incompatible;
    }

    /**
     * @param bool $incompatible
     * @return ArtifactEntity
     */
    public function setIncompatible($incompatible)
    {
        $this->incompatible = $incompatible;

        return $this;
    }
}
