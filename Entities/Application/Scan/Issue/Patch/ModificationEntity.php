<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Patch;

use RIPS\ConnectorBundle\Entities\Application\Scan;

class ModificationEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $virtualLine;

    /**
     * @var int
     */
    protected $originalLine;

    /**
     * @var int
     */
    protected $columnStart;

    /**
     * @var int
     */
    protected $columnEnd;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $highlightedContent;

    /**
     * @var Scan\FileEntity
     */
    protected $file;

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
     * Set virtualLine
     *
     * @param  int $virtualLine
     * @return $this
     */
    public function setVirtualLine($virtualLine)
    {
        $this->virtualLine = $virtualLine;

        return $this;
    }

    /**
     * get virtualLine
     *
     * @return int
     */
    public function getVirtualLine()
    {
        return $this->virtualLine;
    }

    /**
     * Set originalLine
     *
     * @param  int $originalLine
     * @return $this
     */
    public function setOriginalLine($originalLine)
    {
        $this->originalLine = $originalLine;

        return $this;
    }

    /**
     * get virtualLine
     *
     * @return int
     */
    public function getOriginalLine()
    {
        return $this->originalLine;
    }

    /**
     * Set columnStart
     *
     * @param  int $columnStart
     * @return $this
     */
    public function setColumnStart($columnStart)
    {
        $this->columnStart = $columnStart;

        return $this;
    }

    /**
     * get columnStart
     *
     * @return int
     */
    public function getColumnStart()
    {
        return $this->columnStart;
    }

    /**
     * Set columnEnd
     *
     * @param  int $columnEnd
     * @return $this
     */
    public function setColumnEnd($columnEnd)
    {
        $this->columnEnd = $columnEnd;

        return $this;
    }

    /**
     * get columnEnd
     *
     * @return int
     */
    public function getColumnEnd()
    {
        return $this->columnEnd;
    }

    /**
     * Set content
     *
     * @param  string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
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
     * @return $this
     */
    public function setHighlightedContent($highlightedContent)
    {
        $this->highlightedContent = $highlightedContent;

        return $this;
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
     * @param Scan\FileEntity $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->file = $file;

        return $this;
    }

    /**
     * Get file
     *
     * @return Scan\FileEntity
     */
    public function getFile()
    {
        return $this->file;
    }
}
