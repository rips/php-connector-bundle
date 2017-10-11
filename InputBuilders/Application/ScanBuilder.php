<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ScanBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $version;

    /**
     * @var  boolean
     */
    protected $codeStored;

    /**
     * @var  boolean
     */
    protected $uploadRemoved;

    /**
     * @var boolean
     */
    protected $fullCodeCompared;

    /**
     * @var boolean
     */
    protected $historyInherited;

    /**
     * @var int
     */
    protected $chargedQuota;

    /**
     * @var int
     */
    protected $custom;

    /**
     * @var int
     */
    protected $parent;
    
    /**
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->version = $version;
    
        return $this;
    }
    
    /**
     * Set codeStored
     *
     * @param boolean $codeStored
     * @return $this
     */
    public function setCodeStored($codeStored)
    {
        $this->codeStored = $codeStored;
    
        return $this;
    }
    
    /**
     * Set uploadRemoved
     *
     * @param boolean $uploadRemoved
     * @return $this
     */
    public function setUploadRemoved($uploadRemoved)
    {
        $this->uploadRemoved = $uploadRemoved;
    
        return $this;
    }
    
    /**
     * Set fullCodeCompared
     *
     * @param boolean $fullCodeCompared
     * @return $this
     */
    public function setFullCodeCompared($fullCodeCompared)
    {
        $this->fullCodeCompared = $fullCodeCompared;
    
        return $this;
    }
    
    /**
     * Set historyInherited
     *
     * @param boolean $historyInherited
     * @return $this
     */
    public function setHistoryInherited($historyInherited)
    {
        $this->historyInherited = $historyInherited;
    
        return $this;
    }
    
    /**
     * Set chargedQuota
     *
     * @param int $chargedQuota
     * @return $this
     */
    public function setChargedQuota($chargedQuota)
    {
        $this->chargedQuota = $chargedQuota;
    
        return $this;
    }
    
    /**
     * Set custom
     *
     * @param int $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    
        return $this;
    }
    
    /**
     * Set parent
     *
     * @param int $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
        return $this;
    }
}
