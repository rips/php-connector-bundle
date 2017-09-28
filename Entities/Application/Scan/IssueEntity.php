<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\ConcatEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\SinkEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\SourceEntity
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\SummaryEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ReviewEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\MarkupEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Origin\TypeEntity as OriginTypeEntity;

class IssueEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var CommentEntity[]
     */
    protected $comments;

    /**
     * @var SummaryEntity[]
     */
    protected $summaries;

    /**
     * @var MarkupEntity[]
     */
    protected $markups;

    /**
     * @var OriginTypeEntity
     */
    protected $origin;

    /**
     * @var integer
     */
    protected $depth;

    /**
     * @var TypeEntity
     */
    protected $type;

    /**
     * @var ReviewEntity[]
     */
    protected $reviews;

    /**
     * @var bool
     */
    protected $reviewed;

    /**
     * @var bool
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
     * @var IssueEntity
     */
    protected $parent;

    /**
     * @var ConcatEntity
     */
    protected $concat;

    /**
     * @var ScanEntity
     */
    protected $scan;

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
     * @var array
     */
    protected $readable;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comments
     *
     * @param  CommentEntity[] $comments
     * @return void
     */
    public function setComments(array $comments)
    {
        $this->comments = $comments;
    }

    /**
     * Get comments
     *
     * @return CommentEntity[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set summaries
     *
     * @param  SummaryEntity[] $summaries
     * @return void
     */
    public function setSummaries(array $summaries)
    {
        $this->summaries = $summaries;
    }

    /**
     * Get summaries
     *
     * @return SummaryEntity[]
     */
    public function getSummaries()
    {
        return $this->summaries;
    }

    /**
     * Set markups
     *
     * @param  MarkupEntity[] $markups
     * @return void
     */
    public function setMarkups(array $markups)
    {
        $this->markups = $markups;
    }

    /**
     * Get markups
     *
     * @return MarkupEntity[]
     */
    public function getMarkups()
    {
        return $this->markups;
    }

    /**
     * Set Origin
     *
     * @param  OriginTypeEntity $origin
     * @return void
     */
    public function setOrigin(OriginTypeEntity $origin)
    {
        $this->origin  = $origin;
    }

    /**
     * Get origin
     *
     * @return OriginTypeEntity
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Set depth
     *
     * @param  int $depth
     * @return void
     */
    public function setDepth($depth)
    {
        $this->depth = $depth;
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
     * @param  TypeEntity $type
     * @return void
     */
    public function setType(TypeEntity $type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set reviews
     *
     * @param  ReviewEntity[] $reviews
     * @return void
     */
    public function setReviews(array $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Get reviews
     *
     * @return ReviewEntity[]
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * Set reviewed
     *
     * @param  bool $reviewed
     * @return void
     */
    public function setReviewed($reviewed)
    {
        $this->reviewed = $reviewed;
    }

    /**
     * Get reviewed
     *
     *@return bool
     */
    public function getReviewed()
    {
        return $this->reviewed;
    }

    /**
     * Set negativelyReviewed
     *
     * @param  bool $negativelyReviewed
     * @return void
     */
    public function setNegativelyReviewed($negativelyReviewed)
    {
        $this->negativelyReviewed = $negativelyReviewed;
    }

    /**
     * Get negativelyReviewed
     *
     * @return bool
     */
    public function getNegativelyReviewed()
    {
        return $this->negativelyReviewed;
    }

    /**
     * Set source
     *
     * @param SourceEntity $source
     */
    public function setSource(SourceEntity $source)
    {
        $this->source = $source;
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
     * @param  SinkEntity $sink
     * @return void
     */
    public function setSink(SinkEntity $sink)
    {
        $this->sink = $sink;
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
     * @param  ConcatEntity $concat
     * @return void
     */
    public function setConcat(ConcatEntity $concat)
    {
        $this->concat = $concat;
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
     * Set scan
     *
     * @param  ScanEntity $scan
     * @return void
     */
    public function setScan(ScanEntity $scan)
    {
        $this->scan = $scan;
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
     * Set effort
     *
     * @param  int $effort
     * @return void
     */
    public function setEffort($effort)
    {
        $this->effort = $effort;
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
     * @param  bool
     * @return void
     */
    public function setComplete($complete)
    {
        $this->complete = $complete;
    }

    /**
     * Get complete
     *
     * @return bool
     */
    public function getComplete()
    {
        return $this->complete;
    }

    /**
     * Set parent
     *
     * @param  IssueEntity $parent
     * @return void
     */
    public function setParent(IssueEntity $parent)
    {
        $this->parent = $parent;
    }

    /**
     * Get parent
     *
     * @return IssueEntity
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Set cve
     *
     * @param  string $cve
     * @return void
     */
    public function setCve($cve)
    {
        $this->cve = $cve;
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
     * Set readable
     *
     * @param  array $readable
     * @return void
     */
    public function setReadable(array $readable)
    {
        $this->readable = $readable;
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
}
