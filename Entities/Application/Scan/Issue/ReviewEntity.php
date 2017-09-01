<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

class ReviewEntity
{
    /**
     * @var array
     */
    protected $review;

    /**
     * Set review
     *
     * @param array $review
     * @return void
     */
    public function setReview(array $review)
    {
        $this->review = $review;
    }

    /**
     * Get review
     *
     *@return array
     */
    public function getReview(): array
    {
        return $this->review;
    }
}
