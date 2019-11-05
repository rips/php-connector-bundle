<?php

namespace RIPS\ConnectorBundle\Entities\History\Scan\Issue;

class TypeEntity
{
    /**
     * @var ReviewEntity[]
     */
    protected $reviews;

    /**
     * @var int|null
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @return ReviewEntity[]
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param ReviewEntity[] $reviews
     * @return TypeEntity
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return int|null
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     * @return TypeEntity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return TypeEntity
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }
}
