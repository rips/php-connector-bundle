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
        $this->setFields[] = 'validuntil';
        $this->validUntil = $validUntil;
    
        return $this;
    }
}
