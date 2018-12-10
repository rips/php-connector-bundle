<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use DateTime;
use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ProcessBuilder extends BaseBuilder
{
    /**
     * @var string
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
     * @var int
     */
    protected $memory;

    /**
     * @var int
     */
    protected $phase;

    /**
     * @var int
     */
    protected $percent;

    /**
     * Set pid
     *
     * @param string $pid
     * @return $this
     */
    public function setPid($pid)
    {
        $this->setFields[] = 'pid';
        $this->pid = $pid;
    
        return $this;
    }
    
    /**
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->setFields[] = 'version';
        $this->version = $version;
    
        return $this;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setFields[] = 'name';
        $this->name = $name;

        return $this;
    }

    /**
     * Set startedAt
     *
     * @param DateTime $startedAt
     * @return $this
     */
    public function setStartedAt($startedAt)
    {
        $this->setFields[] = 'startedAt';
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * Set finishedAt
     *
     * @param DateTime $finishedAt
     * @return $this
     */
    public function setFinishedAt($finishedAt)
    {
        $this->setFields[] = 'finishedAt';
        $this->finishedAt = $finishedAt;

        return $this;
    }

    /**
     * Set finished
     *
     * @param boolean $finished
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->setFields[] = 'finished';
        $this->finished = $finished;

        return $this;
    }

    /**
     * Set memory
     *
     * @param int $memory
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->setFields[] = 'memory';
        $this->memory = $memory;

        return $this;
    }

    /**
     * Set phase
     *
     * @param int $phase
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->setFields[] = 'phase';
        $this->phase = $phase;

        return $this;
    }

    /**
     * Set percent
     *
     * @param int $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->setFields[] = 'percent';
        $this->percent = $percent;

        return $this;
    }
}
