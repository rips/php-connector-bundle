<?php

namespace RIPS\ConnectorBundle\Entities\User\Statistics;

class ReviewTagEntity
{
    /**
     * @var string
     */
    protected $tag;

    /**
     * @var int
     */
    protected $reviews;

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return ReviewTagEntity
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }

    /**
     * @return int
     */
    public function getReviews()
    {
        return $this->reviews;
    }

    /**
     * @param int $reviews
     * @return ReviewTagEntity
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }
}
