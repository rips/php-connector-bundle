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
    protected $finishedAt;

    /**
     * @var boolean
     */
    protected $finished;

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
     * Set finishedAt
     *
     * @param DateTime $finishedAt
     * @return $this
     */
    public function setFinish($finishedAt)
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
}
