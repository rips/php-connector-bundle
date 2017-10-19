<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class SettingsBuilder extends BaseBuilder
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
     * Set key
     *
     * @param string $key
     * @return $this
     */
    public function setKey($key)
    {
        $this->setFields[] = 'key';
        $this->key = $key;
    
        return $this;
    }
    
    /**
     * Set value
     *
     * @param string $value
     * @return $this
     */
    public function setValue($value)
    {
        $this->setFields[] = 'value';
        $this->value = $value;
    
        return $this;
    }
}
