<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class IssueBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $type;

    /**
     * @var int
     */
    protected $origin;

    /**
     * @var int
     */
    protected $depth;

    /**
     * @var string
     */
    protected $cve;

    /**
     * @var bool
     */
    protected $directlyCalled;

    /**
     * @var bool
     */
    protected $registerGlobals;

    /**
     * @var int
     */
    protected $process;
    
    /**
     * Set type
     *
     * @param int $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setFields[] = 'type';
        $this->type = $type;
    
        return $this;
    }
    
    /**
     * Set origin
     *
     * @param int $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->setFields[] = 'origin';
        $this->origin = $origin;
    
        return $this;
    }
    
    /**
     * Set depth
     *
     * @param int $depth
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->setFields[] = 'depth';
        $this->depth = $depth;
    
        return $this;
    }
    
    /**
     * Set cve
     *
     * @param string $cve
     * @return $this
     */
    public function setCve($cve)
    {
        $this->setFields[] = 'cve';
        $this->cve = $cve;
    
        return $this;
    }

    /**
     * Set directlyCalled
     *
     * @param bool $directlyCalled
     * @return $this
     */
    public function setDirectlyCalled($directlyCalled)
    {
        $this->setFields[] = 'directlyCalled';
        $this->directlyCalled = $directlyCalled;

        return $this;
    }

    /**
     * Set registerGlobals
     *
     * @param bool $registerGlobals
     * @return $this
     */
    public function setRegisterGlobals($registerGlobals)
    {
        $this->setFields[] = 'registerGlobals';
        $this->registerGlobals = $registerGlobals;

        return $this;
    }

    /**
     * Set process
     *
     * @param int $process
     * @return $this
     */
    public function setProcess($process)
    {
        $this->setFields[] = 'process';
        $this->process = $process;

        return $this;
    }
}
