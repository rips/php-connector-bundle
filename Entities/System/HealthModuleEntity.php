<?php

namespace RIPS\ConnectorBundle\Entities\System;

class HealthModuleEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $state;

    /**
     * @var string[]
     */
    protected $messages;

    /**
     * @var string
     */
    protected $timestamp;

    /**
     * @var HealthModuleParameterEntity[]
     */
    protected $parameters;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HealthModuleEntity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return HealthModuleEntity
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string[]
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * @param string[] $messages
     * @return HealthModuleEntity
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     * @return HealthModuleEntity
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return HealthModuleParameterEntity[]
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * @param HealthModuleParameterEntity[] $parameters
     * @return HealthModuleEntity
     */
    public function setParameters($parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }
}
