<?php

namespace RIPS\ConnectorBundle\Entities\System;

class HealthEntity
{
    /**
     * @var string
     */
    protected $state;

    /**
     * @var string[]
     */
    protected $messages;

    /**
     * @var HealthModuleEntity[]
     */
    protected $modules;

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return HealthEntity
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
     * @return HealthEntity
     */
    public function setMessages($messages)
    {
        $this->messages = $messages;

        return $this;
    }

    /**
     * @return HealthModuleEntity[]
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * @param HealthModuleEntity[] $modules
     * @return HealthEntity
     */
    public function setModules($modules)
    {
        $this->modules = $modules;

        return $this;
    }

    /**
     * @param HealthModuleEntity $module
     * @return $this
     */
    public function addModule($module)
    {
        $this->modules[] = $module;

        return $this;
    }
}
