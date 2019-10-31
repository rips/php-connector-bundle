<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ArtifactBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $scan;

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
     * Set scan
     *
     * @param int $scan
     * @return $this
     */
    public function setScan($scan)
    {
        $this->setFields[] = 'scan';
        $this->scan = $scan;

        return $this;
    }
}
