<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class TeamBuilder extends BaseBuilder
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
}
