<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;

class ServerEntity
{
    /**
     * @var integer
     */
    protected $id;

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
     * @var DateTime
     */
    protected $lastSeenAt;

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Get internalAddress
     *
     * @return string
     */
    public function getInternalAddress()
    {
        return $this->internalAddress;
    }

    /**
     * Set internalAddress
     *
     * @param string $internalAddress
     * @return $this
     */
    public function setInternalAddress($internalAddress)
    {
        $this->internalAddress = $internalAddress;

        return $this;
    }

    /**
     * Get externalAddress
     *
     * @return string
     */
    public function getExternalAddress()
    {
        return $this->externalAddress;
    }

    /**
     * Set externalAddress
     *
     * @param string $externalAddress
     * @return $this
     */
    public function setExternalAddress($externalAddress)
    {
        $this->externalAddress = $externalAddress;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
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
        $this->startedAt = $startedAt;

        return $this;
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
     * Set stoppedAt
     *
     * @param DateTime $stoppedAt
     * @return $this
     */
    public function setStoppedAt($stoppedAt)
    {
        $this->stoppedAt = $stoppedAt;

        return $this;
    }

    /**
     * Get stoppedAt
     *
     * @return DateTime
     */
    public function getStoppedAt()
    {
        return $this->stoppedAt;
    }

    /**
     * Get memory
     *
     * @return int
     */
    public function getMemory()
    {
        return $this->memory;
    }

    /**
     * Set memory
     *
     * @param int $memory
     * @return $this
     */
    public function setMemory($memory)
    {
        $this->memory = $memory;

        return $this;
    }

    /**
     * Get cores
     *
     * @return int
     */
    public function getCores()
    {
        return $this->cores;
    }

    /**
     * Set cores
     *
     * @param int $cores
     * @return $this
     */
    public function setCores($cores)
    {
        $this->cores = $cores;

        return $this;
    }

    /**
     * Get AMI
     *
     * @return string
     */
    public function getAmi()
    {
        return $this->ami;
    }

    /**
     * Set AMI
     *
     * @param string $ami
     * @return ServerEntity
     */
    public function setAmi($ami)
    {
        $this->ami = $ami;

        return $this;
    }

    /**
     * Set lastSeenAt
     *
     * @param DateTime $lastSeenAt
     * @return $this
     */
    public function setLastSeenAt($lastSeenAt)
    {
        $this->lastSeenAt = $lastSeenAt;

        return $this;
    }

    /**
     * Get lastSeenAt
     *
     * @return DateTime
     */
    public function getLastSeenAt()
    {
        return $this->lastSeenAt;
    }
}
