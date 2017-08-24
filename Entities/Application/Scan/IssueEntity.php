<?php


namespace RIPS\ConnectorBundle\Entities\Application\Scan;


use MongoDB\BSON\Type;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\ConcatEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\MarkupEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\OriginEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\SinkEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\SourceEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\SummarieEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\TypeEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\OrgEntity;

class IssueEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $comment;

    /**
     * @var SummarieEntity
     */
    protected $summarie;

    /**
     * @var MarkupEntity
     */
    protected $markup;

    /**
     * @var OriginEntity
     */
    protected $origin;

    /**
     * @var int
     */
    protected $depth;

    /**
     * @var TypeEntity
     */
    protected $type;

    /**
     * @var array
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
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param array $comment
     * @return void
     */
    public function setComment(array $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return array
     */
    public function getComment(): array
    {
        return $this->comment;
    }

    /**
     * Set summarie
     *
     * @param SummarieEntity $summarie
     * @return void
     */
    public function setSummarie(SummarieEntity $summarie)
    {
        $this->summarie = $summarie;
    }

    /**
     * Get summarie
     *
     * @return SummarieEntity
     */
    public function getSummarie(): SummarieEntity
    {
        return $this->summarie;
    }

    /**
     * Set markup
     *
     * @param MarkupEntity $markup
     * @return void
     */
    public function setMarkup(MarkupEntity $markup)
    {
        $this->markup = $markup;
    }

    /**
     * Get summarie
     *
     * @return MarkupEntity
     */
    public function getMarkup(): MarkupEntity
    {
        return $this->markup;
    }

    /**
     * Set Origin
     *
     * @param OriginEntity $origin
     * @return void
     */
    public function setOrigin(OriginEntity $origin)
    {
        $this->origin  = $origin;
    }

    /**
     * Get origin
     *
     * @return OriginEntity
     */
    public function getOrigin(): OriginEntity
    {
        return $this->origin;
    }

    /**
     * Set depth
     *
     * @param int $depth
     * @return void
     */
    public function setDepth(int $depth)
    {
        $this->depth = $depth;
    }

    /**
     * Get depth
     *
     * @return int
     */
    public function getDepth(): int
    {
        return $this->depth;
    }

    /**
     * Set type
     *
     * @param TypeEntity $type
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
    public function getType(): TypeEntity
    {
        return $this->type;
    }

    /**
     * Set reviews
     *
     * @param array $reviews
     * @return void
     */
    public function setReviews(array $reviews)
    {
        $this->reviews = $reviews;
    }

    /**
     * Get reviews
     *
     * @return array
     */
    public function getReviews(): array
    {
        return $this->reviews;
    }

    /**
     * Set reviewed
     *
     * @param bool $reviewed
     * @return void
     */
    public function setReviewed(bool $reviewed)
    {
        $this->reviewed = $reviewed;
    }

    /**
     * Get reviewed
     *
     *@return bool
     */
    public function getReviewed(): bool
    {
        return $this->reviewed;
    }

    /**
     * Set negativleyReviewed
     *
     * @param bool $negativelyReviewed
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
    public function getNegativelyReviewed(): bool
    {
        return $this->negativelyReviewed;
    }

    /**
     * Set source
     *
     * @param SourceEntity $source
     */
    public function setSource($source)
    {
        $this->source = $source;
    }

    /**
     * Get source
     *
     * @return SourceEntity
     */
    public function getSource(): SourceEntity
    {
        return $this->source;
    }

    /**
     * Set sink
     *
     * @param SinkEntity $sink
     * @return void
     */
    public function setSink($sink)
    {
        $this->sink = $sink;
    }

    /**
     * Get sink
     *
     * @return SinkEntity
     */
    public function getSink(): SinkEntity
    {
        return $this->sink;
    }

    /**
     * Set concat
     *
     * @param ConcatEntity $concat
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
    public function getConccat(): ConcatEntity
    {
        return $this->concat;
    }

    /**
     * Set scan
     *
     * @param ScanEntity $scan
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
    public function getScan(): ScanEntity
    {
        return $this->scan;
    }

    /**
     * Set effort
     *
     * @param int $effort
     * @return void
     */
    public function setEffort(int $effort)
    {
        $this->effort = $effort;
    }

    /** Get effort
     *
     * @return int
     */
    public function getEffort(): int
    {
        return $this->effort;
    }

    /**
     * Set complete
     *
     * @param bool
     * @return void
     */
    public function setComplete(bool $complete)
    {
        $this->complete = $complete;
    }

    /**
     * Get complete
     *
     * @return bool
     */
    public function getComplete(): bool
    {
        return $this->complete;
    }
}
