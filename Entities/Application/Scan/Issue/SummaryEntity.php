<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

class SummaryEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $line;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $highlightedContent;

    /**
     * @var FileEntity
     */
    protected $file;

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
     * Set line
     *
     * @param  int $line
     * @return void
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * get line
     *
     * @return int
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * Set content
     *
     * @param  string $content
     * @return void
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set highlightedContent
     *
     * @param  string $highlightedContent
     * @return void
     */
    public function setHighlightedContent($highlightedContent)
    {
        $this->highlightedContent = $highlightedContent;
    }

    /**
     * Get highlightedContent
     *
     * @return string
     */
    public function getHighlightedContent()
    {
        return $this->highlightedContent;
    }

    /**
     * Set file
     *
     * @param FileEntity $file
     * @return void
     */
    public function setFile(FileEntity $file)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return FileEntity
     */
    public function getFile()
    {
        return $this->file;
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
