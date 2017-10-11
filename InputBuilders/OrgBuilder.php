<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class OrgBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
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
        $this->name = $name;
    
        return $this;
    }
    
    /**
     * Set validUntil
     *
     * @param string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
    
        return $this;
    }
}
