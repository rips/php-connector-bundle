<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;

class SettingsEntity
{
    /**
     * @var string
     */
    protected $key;

    /**
     * @var string
     */
    protected $value;

    /**
     * @var DateTime
     */
    protected $createdAt;
    
    /**
     * Get key
     *
     * @return string
     */
    public function getKey()
    {
        return $this->key;
    }
    
    /**
     * Set key
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->key = $key;
    
        return $this;
    }
    
    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    
    /**
     * Set value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->value = $value;
    
        return $this;
    }
    
    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    
    /**
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }
}
