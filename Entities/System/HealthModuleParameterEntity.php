<?php

namespace RIPS\ConnectorBundle\Entities\System;

class HealthModuleParameterEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var mixed
     */
    protected $value;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return HealthModuleParameterEntity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     * @return HealthModuleParameterEntity
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }
}
