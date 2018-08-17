<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Process;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class AddBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $pid;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $name;

    /**
     * Set pid
     *
     * @param string $pid
     * @return $this
     */
    public function setPid($pid)
    {
        $this->setFields[] = 'pid';
        $this->pid = $pid;
    
        return $this;
    }
    
    /**
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->setFields[] = 'version';
        $this->version = $version;
    
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
        $this->setFields[] = 'name';
        $this->name = $name;

        return $this;
    }
}
