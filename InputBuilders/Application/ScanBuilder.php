<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ScanBuilder extends BaseBuilder
{
    /**
     * @var integer
     */
    protected $profile;

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
     * @var int[]
     */
    protected $issueTypes;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var int
     */
    protected $analysisDepth;

    /**
     * @var int
     */
    protected $upload;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var int
     */
    protected $maxIssuesPerType;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var int
     */
    protected $phase;

    /**
     * @var int
     */
    protected $percent;

    /**
     * @var int
     */
    protected $loc;

    /**
     * @var string
     */
    protected $rootFile;

    /**
     * Set profile
     *
     * @param integer $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->setFields[] = 'profile';
        $this->profile = $profile;
    
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
        $this->setFields[] = 'parent';
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
        $this->setFields[] = 'codeStored';
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
        $this->setFields[] = 'uploadRemoved';
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
        $this->setFields[] = 'fullCodeCompared';
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
        $this->setFields[] = 'historyInherited';
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
        $this->setFields[] = 'issueTypes';
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
        $this->setFields[] = 'version';
        $this->version = $version;
    
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
     * Set upload
     *
     * @param int $upload
     * @return $this
     */
    public function setUpload($upload)
    {
        $this->setFields[] = 'upload';
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
        $this->setFields[] = 'path';
        $this->path = $path;
    
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
     * Set comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->setFields[] = 'comment';
        $this->comment = $comment;

        return $this;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->setFields[] = 'source';
        $this->source = $source;

        return $this;
    }

    /**
     * Set phase
     *
     * @param int $phase
     * @return $this
     */
    public function setPhase($phase)
    {
        $this->setFields[] = 'phase';
        $this->phase = $phase;

        return $this;
    }

    /**
     * Set percent
     *
     * @param int $percent
     * @return $this
     */
    public function setPercent($percent)
    {
        $this->setFields[] = 'percent';
        $this->percent = $percent;

        return $this;
    }

    /**
     * Set loc
     *
     * @param int $loc
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->setFields[] = 'loc';
        $this->loc = $loc;

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
