<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue\Patch;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ModificationBuilder extends BaseBuilder
{
    /**
     * @var integer
     */
    protected $virtualLine;

    /**
     * @var integer
     */
    protected $originalLine;

    /**
     * @var integer
     */
    protected $columnStart;

    /**
     * @var integer
     */
    protected $columnEnd;

    /**
     * @var string
     */
    protected $content;

    /**
     * @var string
     */
    protected $originalContent;

    /**
     * @var integer
     */
    protected $file;

    /**
     * @var bool
     */
    protected $whitespacesOnly;

    /**
     * Set virtualLine
     *
     * @param integer $virtualLine
     * @return $this
     */
    public function setVirtualLine($virtualLine)
    {
        $this->setFields[] = 'virtualLine';
        $this->virtualLine = $virtualLine;

        return $this;
    }

    /**
     * Set originalLine
     *
     * @param integer $originalLine
     * @return $this
     */
    public function setOriginalLine($originalLine)
    {
        $this->setFields[] = 'originalLine';
        $this->originalLine = $originalLine;

        return $this;
    }

    /**
     * Set columnStart
     *
     * @param integer $columnStart
     * @return $this
     */
    public function setColumnStart($columnStart)
    {
        $this->setFields[] = 'columnStart';
        $this->columnStart = $columnStart;

        return $this;
    }

    /**
     * Set columnEnd
     *
     * @param integer $columnEnd
     * @return $this
     */
    public function setColumnEnd($columnEnd)
    {
        $this->setFields[] = 'columnEnd';
        $this->columnEnd = $columnEnd;

        return $this;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->setFields[] = 'content';
        $this->content = $content;

        return $this;
    }

    /**
     * Set originalContent
     *
     * @param string $originalContent
     * @return $this
     */
    public function setOriginalContent($originalContent)
    {
        $this->setFields[] = 'originalContent';
        $this->originalContent = $originalContent;

        return $this;
    }

    /**
     * Set file
     *
     * @param integer $file
     * @return $this
     */
    public function setFile($file)
    {
        $this->setFields[] = 'file';
        $this->file = $file;

        return $this;
    }

    /**
     * Set whitespacesOnly
     *
     * @param bool $whitespacesOnly
     * @return $this
     */
    public function setWhitespacesOnly($whitespacesOnly)
    {
        $this->setFields[] = 'whitespacesOnly';
        $this->whitespacesOnly = $whitespacesOnly;

        return $this;
    }
}
