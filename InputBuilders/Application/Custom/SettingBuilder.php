<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Custom;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class SettingBuilder extends BaseBuilder
{
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
     * Set issueTypes
     *
     * @param array $issueTypes
     * @return $this
     */
    public function setIssueTypes($issueTypes)
    {
        $this->setFields[] = 'issueTypes';
        $this->issueTypes = $issueTypes;
    
        return $this;
    }
    
    /**
     * Set codeStored
     *
     * @param bool $codeStored
     * @return $this
     */
    public function setCodeStored($codeStored)
    {
        $this->setFields[] = 'codeStored';
        $this->codeStored = $codeStored;
    
        return $this;
    }

    /**
     * Set uploadRemoved
     *
     * @param bool $uploadRemoved
     * @return $this
     */
    public function setUploadRemoved($uploadRemoved)
    {
        $this->setFields[] = 'uploadRemoved';
        $this->uploadRemoved = $uploadRemoved;

        return $this;
    }

    /**
     * Set fullCodeCompared
     *
     * @param bool $fullCodeCompared
     * @return $this
     */
    public function setFullCodeCompared($fullCodeCompared)
    {
        $this->setFields[] = 'fullCodeCompared';
        $this->fullCodeCompared = $fullCodeCompared;

        return $this;
    }

    /**
     * Set historyInherited
     *
     * @param bool $historyInherited
     * @return $this
     */
    public function setHistoryInherited($historyInherited)
    {
        $this->setFields[] = 'historyInherited';
        $this->historyInherited = $historyInherited;

        return $this;
    }

    /**
     * Set analysisDepth
     *
     * @param int $analysisDepth
     * @return $this
     */
    public function setAnalysisDepth($analysisDepth)
    {
        $this->setFields[] = 'analysisDepth';
        $this->analysisDepth = $analysisDepth;

        return $this;
    }
}
