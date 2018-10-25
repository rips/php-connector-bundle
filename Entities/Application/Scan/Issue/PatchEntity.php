<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan;

class PatchEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Patch\TypeEntity
     */
    protected $type;

    /**
     * @var Patch\ModificationEntity[]
     */
    protected $modifications;

    /**
     * @var Scan\IssueEntity
     */
    protected $issue;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set type
     *
     * @param Patch\TypeEntity $type
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
     * @return Patch\TypeEntity
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set modifications
     *
     * @param Patch\ModificationEntity[] $modifications
     * @return $this
     */
    public function setModifications(array $modifications)
    {
        $this->modifications = $modifications;

        return $this;
    }

    /**
     * Get types
     *
     * @return Patch\ModificationEntity[]
     */
    public function getModifications()
    {
        return $this->modifications;
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
