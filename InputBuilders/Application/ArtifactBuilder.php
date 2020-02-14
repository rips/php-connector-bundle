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
     * @var int
     */
    protected $process;

    /**
     * @var bool
     */
    protected $incompatible;

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

    /**
     * @param int $process
     * @return ArtifactBuilder
     */
    public function setProcess($process)
    {
        $this->setFields[] = 'process';
        $this->process = $process;

        return $this;
    }

    /**
     * @param bool $incompatible
     * @return ArtifactBuilder
     */
    public function setIncompatible($incompatible)
    {
        $this->setFields[] = 'incompatible';
        $this->incompatible = $incompatible;

        return $this;
    }
}
