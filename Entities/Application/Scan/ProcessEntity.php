<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class ProcessEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $pid;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var DateTime
     */
    protected $startedAt;

    /**
     * @var DateTime
     */
    protected $finishedAt;

    /**
     * @var boolean
     */
    protected $finished;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pid
     *
     * @param  integer $pid
     * @return void
     */
    public function setPid($pid)
    {
        $this->pid = $pid;
    }

    /**
     * Get pid
     *
     * @return int
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * Set version
     *
     * @param  string $version
     * @return void
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set name
     *
     * @param  string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set startedAt
     *
     * @param DateTime $startedAt
     * @return void
     */
    public function setStartedAt($startedAt)
    {
        $this->startedAt = $startedAt;
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
     * @return void
     */
    public function setFinishedAt($finishedAt)
    {
        $this->finishedAt = $finishedAt;
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
     * Set finished
     *
     * @param boolean $finished
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->finished = $finished;

        return $this;
    }

    /**
     * Get finished
     *
     * @return boolean
     */
    public function getFinished()
    {
        return $this->finished;
    }

    /**
     * Set scan
     *
     * @param ScanEntity $scan
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
    public function getScan()
    {
        return $this->scan;
    }
}
