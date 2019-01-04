<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan;

class ReviewEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var Scan\Issue\Review\TypeEntity
     */
    protected $type;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var Scan\IssueEntity
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
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set type
     *
     * @param Scan\Issue\Review\TypeEntity $type
     * @return $this
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return Scan\Issue\Review\TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
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
     * Set source
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set issue
     *
     * @param Scan\IssueEntity $issue
     * @return $this
     */
    public function setIssue($issue)
    {
        $this->issue = $issue;

        return $this;
    }

    /**
     * Get issue
     *
     * @return Scan\IssueEntity
     */
    public function getIssue()
    {
        return $this->issue;
    }
}
