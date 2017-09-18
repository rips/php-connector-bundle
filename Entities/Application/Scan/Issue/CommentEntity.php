<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;

class CommentEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var DateTime
     */
    protected $submission;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var IssueEntity
     */
    protected $issue;

    /**
     * Set id
     *
     * @param integer $id
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
     * Set comment
     *
     * @param string $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return array
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set submission
     *
     * @param DateTime $submission
     * @return void
     */
    public function setSubmission(DateTime $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Get submission
     *
     * @return DateTime
     */
    public function getSubmission()
    {
        return $this->submission;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return void
     */
    public function setCreatedBy(UserEntity $createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set issue
     *
     * @param IssueEntity
     * @return void
     */
    public function setIssue(IssueEntity $issue)
    {
        $this->issue = $issue;
    }

    /**
     * Get issue
     *
     * @return IssueEntity
     */
    public function getIssue()
    {
        return $this->issue;
    }
}
