<?php

namespace RIPS\ConnectorBundle\Entities\User;

use RIPS\ConnectorBundle\Entities\User\Statistics\ReviewTagEntity;
use RIPS\ConnectorBundle\Entities\UserEntity;

class StatisticsEntity
{
    /**
     * @var UserEntity
     */
    protected $user;

    /**
     * @var int
     */
    protected $scans;

    /**
     * @var int
     */
    protected $reviews;

    /**
     * @var int
     */
    protected $comments;

    /**
     * @var ReviewTagEntity[]
     */
    protected $reviewsTags;

    /**
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserEntity $user
     * @return StatisticsEntity
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return int
     */
    public function getScans()
    {
        return $this->scans;
    }

    /**
     * @param int $scans
     * @return StatisticsEntity
     */
    public function setScans($scans)
    {
        $this->scans = $scans;

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
     * @return StatisticsEntity
     */
    public function setReviews($reviews)
    {
        $this->reviews = $reviews;

        return $this;
    }

    /**
     * @return int
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param int $comments
     * @return StatisticsEntity
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * @return ReviewTagEntity[]
     */
    public function getReviewsTags()
    {
        return $this->reviewsTags;
    }

    /**
     * @param ReviewTagEntity[] $reviewsTags
     * @return StatisticsEntity
     */
    public function setReviewsTags($reviewsTags)
    {
        $this->reviewsTags = $reviewsTags;

        return $this;
    }
}
