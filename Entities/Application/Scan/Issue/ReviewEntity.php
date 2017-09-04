<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Review\Type;

class ReviewEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $submission;

    /**
     * @var TypeEntity
     */
    protected $type;

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
     * @param integer
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
     * Set type
     *
     * @param Type $type
     * @return void
     */
    public function setType(Type $type)
    {
        $this->type = $type;
    }

    /**
     * Get type
     *
     * @return Type
     */
    public function getType(): Type
    {
        return $this->type;
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
     * @return void
     */
    public function getCreatedBy(): UserEntity
    {
        return $this->createdBy;
    }

    /**
     * Set issue
     *
     * @param IssueEntity $issue
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
