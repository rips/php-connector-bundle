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
     * @var integer
     */
    protected $file;

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
}
