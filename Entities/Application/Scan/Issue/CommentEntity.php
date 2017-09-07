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
     * @param string $comment
     * @return void
     */
    public function setComment(string $comment)
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
    public function getSubmission(): DateTime
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
    public function getCreatedBy(): UserEntity
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
    public function getIssue(): IssueEntity
    {
        return $this->issue;
    }
}
