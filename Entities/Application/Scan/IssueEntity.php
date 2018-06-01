<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use DateTime;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class IssueEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Issue\CommentEntity[]
     */
    protected $comments;

    /**
     * @var Issue\SummaryEntity[]
     */
    protected $summaries;

    /**
     * @var Issue\MarkupEntity[]
     */
    protected $markups;

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
     * @var Issue\ReviewEntity[]
     */
    protected $reviews;

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
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var IssueEntity
     */
    protected $parent;

    /**
     * @var int
     */
    protected $parentCount;

    /**
     * @var IssueEntity[]
     */
    protected $children;

    /**
     * @var DateTime
     */
    protected $lastModification;

    /**
     * @var string
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
     * Set comments
     *
     * @param Issue\CommentEntity[] $comments
     * @return $this
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return Issue\CommentEntity[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set summaries
     *
     * @param Issue\SummaryEntity[] $summaries
     * @return $this
     */
    public function setSummaries(array $summaries)
    {
        $this->summaries = $summaries;

        return $this;
    }

    /**
     * Get summaries
     *
     * @return Issue\SummaryEntity[]
     */
    public function getSummaries()
    {
        return $this->summaries;
    }

    /**
     * Set markups
     *
     * @param Issue\MarkupEntity[]
     * @return $this
     */
    public function setMarkups(array $markups)
    {
        $this->markups = $markups;

        return $this;
    }

    /**
     * Get markups
     *
     * @return Issue\MarkupEntity[]
     */
    public function getMarkups()
    {
        return $this->markups;
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
     * Set reviews
     *
     * @param Issue\ReviewEntity[] $reviews
     * @return $this
     */
    public function setReviews(array $reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * Get reviews
     *
     * @return Issue\ReviewEntity[]
     */
    public function getReviews()
    {
        return $this->reviews;
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
     * Set scan
     *
     * @param ScanEntity $scan
     * @return $this
     */
    public function setScan($scan)
    {
        $this->scan = $scan;

        return $this;
    }

    /**
     * Get scan
     *
     * @return ScanEntity
     */
    public function getScan()
    {
        return $this->scan;
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
     * Set parentCount
     *
     * @param int $parentCount
     * @return $this
     */
    public function setParentCount($parentCount)
    {
        $this->parentCount = $parentCount;

        return $this;
    }

    /**
     * Get parentCount
     *
     * @return int
     */
    public function getParentCount()
    {
        return $this->parentCount;
    }

    /**
     * Set children
     *
     * @param IssueEntity[] $children
     * @return $this
     */
    public function setChildren(array $children)
    {
        $this->children = $children;

        return $this;
    }

    /**
     * Get children
     *
     * @return IssueEntity[]
     */
    public function getChildren()
    {
        return $this->children;
    }

    /**
     * Set lastModification
     *
     * @param DateTime $lastModification
     * @return $this
     */
    public function setLastModification($lastModification)
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * Get lastModification
     *
     * @return DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }

    /**
     * Set readable
     *
     * @param string $readable
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
     * @return string
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
}
