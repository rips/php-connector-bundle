<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use DateTime;

class OrgBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var array
     */
    protected $callbacks;
    
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
     * Set validUntil
     *
     * @param DateTime $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->setFields[] = 'validUntil';
        $this->validUntil = $validUntil;
    
        return $this;
    }

    /**
     * Set callbacks
     *
     * @param array $callbacks
     * @return $this
     */
    public function setCallbacks(array $callbacks)
    {
        $this->setFields[] = 'callbacks';
        $this->callbacks = $callbacks;

        return $this;
    }
}
