<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ProfileCloneBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $targetApplication;

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
     * Set target application
     *
     * @param int $targetApplication
     * @return $this
     */
    public function setTargetApplication($targetApplication)
    {
        $this->setFields[] = 'targetApplication';
        $this->targetApplication = $targetApplication;

        return $this;
    }
}
