<?php

namespace RIPS\ConnectorBundle\Entities\Notification;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\ReviewEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Entities\UserEntity;

class MessageEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $eventType;

    /**
     * @var UserEntity
     */
    protected $user;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var IssueEntity
     */
    protected $issue;

    /**
     * @var CommentEntity
     */
    protected $comment;

    /**
     * @var ReviewEntity
     */
    protected $review;

    /**
     * @var UserEntity
     */
    protected $userTarget;

    /**
     * @var \DateTime
     */
    protected $fetchedAt;

    /**
     * @var \DateTime
     */
    protected $readAt;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return MessageEntity
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param int $eventType
     * @return MessageEntity
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserEntity $user
     * @return MessageEntity
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return ScanEntity
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * @param ScanEntity $scan
     * @return MessageEntity
     */
    public function setScan($scan)
    {
        $this->scan = $scan;

        return $this;
    }

    /**
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param ApplicationEntity $application
     * @return MessageEntity
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * @return IssueEntity
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * @param IssueEntity $issue
     * @return MessageEntity
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * @return CommentEntity
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param CommentEntity $comment
     * @return MessageEntity
     */
    public function setComment($comment)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * @return ReviewEntity
     */
    public function getReview()
    {
        return $this->review;
    }

    /**
     * @param ReviewEntity $review
     * @return MessageEntity
     */
    public function setReview($review)
    {
        $this->review = $review;

        return $this;
    }

    /**
     * @return UserEntity
     */
    public function getUserTarget()
    {
        return $this->userTarget;
    }

    /**
     * @param UserEntity $userTarget
     * @return MessageEntity
     */
    public function setUserTarget($userTarget)
    {
        $this->userTarget = $userTarget;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getFetchedAt()
    {
        return $this->fetchedAt;
    }

    /**
     * @param \DateTime $fetchedAt
     * @return MessageEntity
     */
    public function setFetchedAt($fetchedAt)
    {
        $this->fetchedAt = $fetchedAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getReadAt()
    {
        return $this->readAt;
    }

    /**
     * @param \DateTime $readAt
     * @return MessageEntity
     */
    public function setReadAt($readAt)
    {
        $this->readAt = $readAt;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return MessageEntity
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
