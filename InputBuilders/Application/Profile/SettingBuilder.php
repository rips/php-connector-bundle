<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Profile;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class SettingBuilder extends BaseBuilder
{
    /**
     * @var int[]
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
     * @var int
     */
    protected $maxIssuesPerType;

    /**
     * @var string
     */
    protected $rootFile;

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

    /**
     * Set maxIssuesPerType
     *
     * @param int $maxIssuesPerType
     * @return $this
     */
    public function setMaxIssuesPerType($maxIssuesPerType)
    {
        $this->setFields[] = 'maxIssuesPerType';
        $this->maxIssuesPerType = $maxIssuesPerType;

        return $this;
    }

    /**
     * Set rootFile
     *
     * @param string $rootFile
     * @return $this
     */
    public function setRootFile($rootFile)
    {
        $this->setFields[] = 'rootFile';
        $this->rootFile = $rootFile;

        return $this;
    }
}
