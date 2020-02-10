<?php

namespace RIPS\ConnectorBundle\InputBuilders\Server;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class SystemBuilder extends BaseBuilder
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
     * @param int $memoryUsed
     * @return SystemBuilder
     */
    public function setMemoryUsed($memoryUsed)
    {
        $this->setFields[] = 'memoryUsed';
        $this->memoryUsed = $memoryUsed;

        return $this;
    }

    /**
     * @param int $diskSpaceFree
     * @return SystemBuilder
     */
    public function setDiskSpaceFree($diskSpaceFree)
    {
        $this->setFields[] = 'diskSpaceFree';
        $this->diskSpaceFree = $diskSpaceFree;

        return $this;
    }

    /**
     * @param int $diskSpaceAvailable
     * @return SystemBuilder
     */
    public function setDiskSpaceAvailable($diskSpaceAvailable)
    {
        $this->setFields[] = 'diskSpaceAvailable';
        $this->diskSpaceAvailable = $diskSpaceAvailable;

        return $this;
    }

    /**
     * @param int $cpuUsage
     * @return SystemBuilder
     */
    public function setCpuUsage($cpuUsage)
    {
        $this->setFields[] = 'cpuUsage';
        $this->cpuUsage = $cpuUsage;

        return $this;
    }
}
