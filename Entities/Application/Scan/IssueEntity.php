<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class IssueEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Issue\Origin\TypeEntity
     */
    protected $origin;

    /**
     * @var int
     */
    protected $depth;

    /**
     * @var Issue\TypeEntity
     */
    protected $type;

    /**
     * @var Issue\ReviewEntity
     */
    protected $lastReview;

    /**
     * @var boolean
     */
    protected $reviewed;

    /**
     * @var boolean
     */
    protected $negativelyReviewed;

    /**
     * @var SourceEntity
     */
    protected $source;

    /**
     * @var SinkEntity
     */
    protected $sink;

    /**
     * @var ConcatEntity
     */
    protected $concat;

    /**
     * @var EntrypointEntity
     */
    protected $entrypoint;

    /**
     * @var IssueEntity
     */
    protected $parent;

    /**
     * @var int
     */
    protected $parentsCount;

    /**
     * @var array
     */
    protected $readable;

    /**
     * @var int
     */
    protected $effort;

    /**
     * @var bool
     */
    protected $complete;

    /**
     * @var string
     */
    protected $cve;

    /**
     * @var bool
     */
    protected $minimal;

    /**
     * @var bool
     */
    protected $directlyCalled;

    /**
     * @var bool
     */
    protected $registerGlobals;

    /**
     * @var ProcessEntity
     */
    protected $process;

    /**
     * @var int
     */
    protected $commentsCount;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set origin
     *
     * @param Issue\Origin\TypeEntity $origin
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;

        return $this;
    }

    /**
     * Get origin
     *
     * @return Issue\Origin\TypeEntity
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set depth
     *
     * @param int $depth
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;

        return $this;
    }

    /**
     * Get depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->depth;
    }

    /**
     * Set type
     *
     * @param Issue\TypeEntity $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return Issue\TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set last review
     *
     * @param Issue\ReviewEntity $lastReview
     * @return $this
     */
    public function setLastReview($lastReview)
    {
        $this->lastReview = $lastReview;

        return $this;
    }

    /**
     * Get last review
     *
     * @return Issue\ReviewEntity
     */
    public function getLastReview()
    {
        return $this->lastReview;
    }

    /**
     * Set reviewed
     *
     * @param boolean $reviewed
     * @return $this
     */
    public function setReviewed($reviewed)
    {
        $this->reviewed = $reviewed;

        return $this;
    }

    /**
     * Get reviewed
     *
     * @return boolean
     */
    public function getReviewed()
    {
        return $this->reviewed;
    }

    /**
     * Set negativelyReviewed
     *
     * @param bool $negativelyReviewed
     * @return $this
     */
    public function setNegativelyReviewed($negativelyReviewed)
    {
        $this->negativelyReviewed = $negativelyReviewed;

        return $this;
    }

    /**
     * Get negativelyReviewed
     *
     * @return boolean
     */
    public function getNegativelyReviewed()
    {
        return $this->negativelyReviewed;
    }

    /**
     * Set source
     *
     * @param SourceEntity $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return SourceEntity
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set sink
     *
     * @param SinkEntity $sink
     * @return $this
     */
    public function setSink($sink)
    {
        $this->sink = $sink;

        return $this;
    }

    /**
     * Get sink
     *
     * @return SinkEntity
     */
    public function getSink()
    {
        return $this->sink;
    }

    /**
     * Set concat
     *
     * @param ConcatEntity $concat
     * @return $this
     */
    public function setConcat($concat)
    {
        $this->concat = $concat;

        return $this;
    }

    /**
     * Get concat
     *
     * @return ConcatEntity
     */
    public function getConcat()
    {
        return $this->concat;
    }

    /**
     * Set entrypoint
     *
     * @param EntrypointEntity $entrypoint
     * @return $this
     */
    public function setEntrypoint($entrypoint)
    {
        $this->entrypoint = $entrypoint;

        return $this;
    }

    /**
     * Get entrypoint
     *
     * @return EntrypointEntity
     */
    public function getEntrypoint()
    {
        return $this->entrypoint;
    }

    /**
     * Set parent
     *
     * @param IssueEntity $parent
     * @return $this
     */
    public function setParent($parent)
    {
        $this->parent = $parent;

        return $this;
    }

    /***
     * Get parent
     *
     * @eturn IssueEntity
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set parentsCount
     *
     * @param int $parentsCount
     * @return $this
     */
    public function setParentsCount($parentsCount)
    {
        $this->parentsCount = $parentsCount;

        return $this;
    }

    /**
     * Get parentsCount
     *
     * @return int
     */
    public function getParentsCount()
    {
        return $this->parentsCount;
    }

    /**
     * Set readable
     *
     * @param array $readable
     * @return $this
     */
    public function setReadable($readable)
    {
        $this->readable = $readable;

        return $this;
    }

    /**
     * Get readable
     *
     * @return array
     */
    public function getReadable()
    {
        return $this->readable;
    }

    /**
     * Set effort
     *
     * @param int $effort
     * @return $this
     */
    public function setEffort($effort)
    {
        $this->effort = $effort;

        return $this;
    }

    /** Get effort
     *
     * @return int
     */
    public function getEffort()
    {
        return $this->effort;
    }

    /**
     * Set complete
     *
     * @param boolean
     * @return $this
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;

        return $this;
    }

    /**
     * Get complete
     *
     * @return boolean
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set cve
     *
     * @param string $cve
     * @return $this
     */
    public function setCve($cve)
    {
        $this->cve = $cve;

        return $this;
    }

    /**
     * Get cve
     *
     * @return string
     */
    public function getCve()
    {
        return $this->cve;
    }

    /**
     * Set minimal
     *
     * @param bool $minimal
     * @return $this
     */
    public function setMinimal($minimal)
    {
        $this->minimal = $minimal;

        return $this;
    }

    /**
     * Get miminal
     *
     * @return bool
     */
    public function getMinimal()
    {
        return $this->minimal;
    }

    /**
     * Set directlyCalled
     *
     * @param bool $directlyCalled
     * @return $this
     */
    public function setDirectlyCalled($directlyCalled)
    {
        $this->directlyCalled = $directlyCalled;

        return $this;
    }

    /**
     * Get directlyCalled
     *
     * @return bool
     */
    public function getDirectlyCalled()
    {
        return $this->directlyCalled;
    }

    /**
     * Set registerGlobals
     *
     * @param bool $registerGlobals
     * @return $this
     */
    public function setRegisterGlobals($registerGlobals)
    {
        $this->registerGlobals = $registerGlobals;

        return $this;
    }

    /**
     * Get registerGlobals
     *
     * @return bool
     */
    public function getRegisterGlobals()
    {
        return $this->registerGlobals;
    }

    /**
     * Set process
     *
     * @param ProcessEntity $process
     * @return $this
     */
    public function setProcess($process)
    {
        $this->process = $process;

        return $this;
    }

    /**
     * Get process
     *
     * @return ProcessEntity
     */
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * Set commentsCount
     *
     * @param int $commentsCount
     * @return $this
     */
    public function setCommentsCount($commentsCount)
    {
        $this->commentsCount = $commentsCount;

        return $this;
    }

    /**
     * Get commentsCount
     *
     * @return int
     */
    public function getCommentsCount()
    {
        return $this->commentsCount;
    }
}
