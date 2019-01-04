<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class TaintBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $startLine;

    /**
     * @var int
     */
    protected $endLine;

    /**
     * @var int
     */
    protected $startColumn;

    /**
     * @var int
     */
    protected $endColumn;

    /**
     * Set startLine
     *
     * @param int $startLine
     * @return $this
     */
    public function setStartLine($startLine)
    {
        $this->setFields[] = 'startLine';
        $this->startLine = $startLine;

        return $this;
    }

    /**
     * Set endLine
     *
     * @param int $endLine
     * @return $this
     */
    public function setEndLine($endLine)
    {
        $this->setFields[] = 'endLine';
        $this->endLine = $endLine;

        return $this;
    }

    /**
     * Set startColumn
     *
     * @param int $startColumn
     * @return $this
     */
    public function setStartColumn($startColumn)
    {
        $this->setFields[] = 'startColumn';
        $this->startColumn = $startColumn;

        return $this;
    }

    /**
     * Set endColumn
     *
     * @param int $endColumn
     * @return $this
     */
    public function setEndColumn($endColumn)
    {
        $this->setFields[] = 'endColumn';
        $this->endColumn = $endColumn;

        return $this;
    }
}
