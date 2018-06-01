<?php

namespace RIPS\ConnectorBundle\Entities\Application\Custom;

use RIPS\ConnectorBundle\Entities\Application\CustomEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\PhpEntity;

class SettingEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $issueTypes;

    /**
     * @var bool
     */
    protected $codeStored;

    /**
     * @var bool
     */
    protected $uploadRemoved;

    /**
     * @var bool
     */
    protected $fullCodeCompared;

    /**
     * @var bool
     */
    protected $historyInherited;

    /**
     * @var int
     */
    protected $analysisDepth;

    /**
     * @var PhpEntity
     */
    protected $php;

    /**
     * @var CustomEntity
     */
    protected $custom;
    
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
    
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
     * Get issueTypes
     *
     * @return array
     */
    public function getIssueTypes()
    {
        return $this->issueTypes;
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
     * Get codeStored
     *
     * @return bool
     */
    public function getCodeStored()
    {
        return $this->codeStored;
    }
    
    /**
     * Set codeStored
     *
     * @param bool $codeStored
     * @return $this
     */
    public function setCodeStored($codeStored)
    {
        $this->codeStored = $codeStored;
    
        return $this;
    }
    
    /**
     * Get uploadRemoved
     *
     * @return bool
     */
    public function getUploadRemoved()
    {
        return $this->uploadRemoved;
    }
    
    /**
     * Set uploadRemoved
     *
     * @param bool $uploadRemoved
     * @return $this
     */
    public function setUploadRemoved($uploadRemoved)
    {
        $this->uploadRemoved = $uploadRemoved;
    
        return $this;
    }
    
    /**
     * Get ffullCodeCompared
     *
     * @return bool
     */
    public function getFullCodeCompared()
    {
        return $this->fullCodeCompared;
    }
    
    /**
     * Set fullCodeCompared
     *
     * @param bool $fullCodeCompared
     * @return $this
     */
    public function setFullCodeCompared($fullCodeCompared)
    {
        $this->fullCodeCompared = $fullCodeCompared;
    
        return $this;
    }
    
    /**
     * Get historyInherited
     *
     * @return bool
     */
    public function getHistoryInherited()
    {
        return $this->historyInherited;
    }
    
    /**
     * Set historyInherited
     *
     * @param bool $historyInherited
     * @return $this
     */
    public function setHistoryInherited($historyInherited)
    {
        $this->historyInherited = $historyInherited;
    
        return $this;
    }

    /**
     * Get analysisDepth
     *
     * @return int
     */
    public function getAnalysisDepth()
    {
        return $this->analysisDepth;
    }

    /**
     * Set analysisDepth
     *
     * @param int $analysisDepth
     * @return $this
     */
    public function setAnalysisDepth($analysisDepth)
    {
        $this->analysisDepth = $analysisDepth;

        return $this;
    }

    /**
     * Get php
     *
     * @return PhpEntity
     */
    public function getPhp()
    {
        return $this->php;
    }

    /**
     * Set php
     *
     * @param PhpEntity $php
     * @return $this
     */
    public function setPhp(PhpEntity $php)
    {
        $this->php = $php;

        return $this;
    }

    /**
     * Get custom
     *
     * @return CustomEntity
     */
    public function getCustom()
    {
        return $this->custom;
    }
    
    /**
     * Set custom
     *
     * @param CustomEntity $custom
     * @return $this
     */
    public function setCustom(CustomEntity $custom)
    {
        $this->custom = $custom;
    
        return $this;
    }
}
