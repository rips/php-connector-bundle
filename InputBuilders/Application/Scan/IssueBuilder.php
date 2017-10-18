<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class IssueBuilder extends BaseBuilder
{
    /**
     * @var integer
     */
    protected $type;

    /**
     * @var integer
     */
    protected $origin;

    /**
     * @var integer
     */
    protected $depth;

    /**
     * @var string
     */
    protected $cve;
    
    /**
     * Set type
     *
     * @param integer $type
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
     * @param integer $origin
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
     * @param integer $depth
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
}
