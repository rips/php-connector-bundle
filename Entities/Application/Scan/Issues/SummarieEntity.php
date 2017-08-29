<?php


namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issues;

class SummarieEntity
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
     * Set id
     *
     * @param  integer $id
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
     * Set line
     *
     * @param int $line
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
    public function getLine():int
    {
        return $this->line;
    }

    /**
     * Set content
     *
     * @param string $content
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
    public function getContent():string
    {
        return $this->content;
    }

    /**
     * Set highlightedContent
     *
     * @param string $highlightedContent
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
    public function getHighlightedContent(): string
    {
        return $this->highlightedContent;
    }
}
