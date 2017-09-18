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
    public function getType()
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
    public function getCreatedBy()
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
    public function getIssue()
    {
        return $this->issue;
    }
}
