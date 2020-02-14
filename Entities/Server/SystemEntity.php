<?php

namespace RIPS\ConnectorBundle\Entities\Server;

class SystemEntity
{
    /**
     * @var int
     */
    protected $memoryUsed;

    /**
     * @var int
     */
    protected $diskSpaceFree;

    /**
     * @var int
     */
    protected $diskSpaceAvailable;

    /**
     * @var int
     */
    protected $cpuUsage;

    /**
     * @return int
     */
    public function getMemoryUsed()
    {
        return $this->memoryUsed;
    }

    /**
     * @param int $memoryUsed
     * @return SystemEntity
     */
    public function setMemoryUsed($memoryUsed)
    {
        $this->memoryUsed = $memoryUsed;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiskSpaceFree()
    {
        return $this->diskSpaceFree;
    }

    /**
     * @param int $diskSpaceFree
     * @return SystemEntity
     */
    public function setDiskSpaceFree($diskSpaceFree)
    {
        $this->diskSpaceFree = $diskSpaceFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getDiskSpaceAvailable()
    {
        return $this->diskSpaceAvailable;
    }

    /**
     * @param int $diskSpaceAvailable
     * @return SystemEntity
     */
    public function setDiskSpaceAvailable($diskSpaceAvailable)
    {
        $this->diskSpaceAvailable = $diskSpaceAvailable;

        return $this;
    }

    /**
     * @return int
     */
    public function getCpuUsage()
    {
        return $this->cpuUsage;
    }

    /**
     * @param int $cpuUsage
     * @return SystemEntity
     */
    public function setCpuUsage($cpuUsage)
    {
        $this->cpuUsage = $cpuUsage;

        return $this;
    }
}
