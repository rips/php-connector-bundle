<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;

class MarkupEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $markup;

    /**
     * @var IssueEntity
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
     * Set markup
     *
     * @param  string $markup
     * @return void
     */
    public function setMarkup($markup)
    {
        $this->markup = $markup;
    }

    /**
     * Get markup
     *
     * @return string
     */
    public function getMarkup()
    {
        return $this->markup;
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
