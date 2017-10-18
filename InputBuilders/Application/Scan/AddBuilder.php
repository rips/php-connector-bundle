<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class AddBuilder extends BaseBuilder
{
    /**
     * @var integer
     */
    protected $chargedQuota;

    /**
     * @var integer
     */
    protected $custom;

    /**
     * @var integer
     */
    protected $parent;

    /**
     * @var boolean
     */
    protected $codeStored;

    /**
     * @var boolean
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
     * @var array
     */
    protected $issueTypes;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
<<<<<<< HEAD:InputBuilders/Application/ScanBuilder.php
    protected $parent;

    /**
     * @var int
     */
    protected $upload;

    /**
     * @var string
     */
    protected $path;

    /**
     * Set chargedQuota
     *
     * @param integer $chargedQuota
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
     * @param integer $custom
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
     * @param integer $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;
    
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
     * Set issueTypes
     *
     * @param array $issueTypes
     * @return $this
     */
    public function setIssueTypes($issueTypes)
    {
        $this->issueTypes = $issueTypes;
    
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
        $this->version = $version;
    
        return $this;
    }
    
    /**
     * Set upload
     *
     * @param string $upload
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->upload = $upload;
    
        return $this;
    }
    
    /**
     * Set path
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Set upload
     *
     * @param int $upload
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->upload = $upload;

        return $this;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }
}
