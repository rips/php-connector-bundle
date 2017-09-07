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
     * @var DateTime
     */
    protected $start;

    /**
     * @var DateTime
     */
    protected $finish;

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
     * Set start
     *
     * @param DateTime $start
     * @return void
     */
    public function setStart(DateTime $start)
    {
        $this->start = $start;
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
     * @return void
     */
    public function setFinish(DateTime $finish)
    {
        $this->finish = $finish;
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
     * Set scan
     *
     * @param ScanEntity $scan
     * @return void
     */
    public function setScan(ScanEntity $scan)
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
