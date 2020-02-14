<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use DateTime;

class ServerBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $internalAddress;

    /**
     * @var string
     */
    protected $externalAddress;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var DateTime
     */
    protected $startedAt;

    /**
     * @var DateTime
     */
    protected $stoppedAt;

    /**
     * @var int
     */
    protected $memory;

    /**
     * @var int
     */
    protected $cores;

    /**
     * @var string
     */
    protected $ami;

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
     * Set internalAddress
     *
     * @param string $internalAddress
     * @return $this
     */
    public function setInternalAddress($internalAddress)
    {
        $this->setFields[] = 'internalAddress';
        $this->internalAddress = $internalAddress;

        return $this;
    }

    /**
     * Set externalAddress
     *
     * @param string $externalAddress
     * @return $this
     */
    public function setExternalAddress($externalAddress)
    {
        $this->setFields[] = 'externalAddress';
        $this->externalAddress = $externalAddress;

        return $this;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setFields[] = 'type';
        $this->type = $type;

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
     * Set stoppedAt
     *
     * @param DateTime $stoppedAt
     * @return $this
     */
    public function setStoppedAt($stoppedAt)
    {
        $this->setFields[] = 'stoppedAt';
        $this->stoppedAt = $stoppedAt;

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
     * Set cores
     *
     * @param int $cores
     * @return $this
     */
    public function setCores($cores)
    {
        $this->setFields[] = 'cores';
        $this->cores = $cores;

        return $this;
    }

    /**
     * Set AMI
     *
     * @param string $ami
     * @return ServerBuilder
     */
    public function setAmi($ami)
    {
        $this->setFields[] = 'ami';
        $this->ami = $ami;

        return $this;
    }
}
