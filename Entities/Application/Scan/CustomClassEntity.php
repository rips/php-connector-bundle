<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class CustomClassEntity
{
    /**
     * @var int
     */
    protected $id;

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
     * @var string
     */
    protected $name;

    /**
     * @var FileEntity
     */
    protected $file;

    /**
     * @var string
     */
    protected $package;

    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set startLine
     *
     * @param int $startLine
     * @return $this
     */
    public function setStartLine($startLine)
    {
        $this->startLine = $startLine;

        return $this;
    }

    /**
     * Get startLine
     *
     * @return int
     */
    public function getStartLine()
    {
        return $this->startLine;
    }

    /**
     * Set endLine
     *
     * @param int $endLine
     * @return $this
     */
    public function setEndLine($endLine)
    {
        $this->endLine = $endLine;

        return $this;
    }

    /**
     * Get endLine
     *
     * @return int
     */
    public function getEndLine()
    {
        return $this->endLine;
    }

    /**
     * Set start column
     *
     * @param int $startColumn
     * @return $this
     */
    public function setStartColumn(int $startColumn)
    {
        $this->startColumn = $startColumn;

        return $this;
    }

    /**
     * Get start column
     *
     * @return int
     */
    public function getStartColumn()
    {
        return $this->startColumn;
    }

    /**
     * Set end column
     *
     * @param int $endColumn
     * @return $this
     */
    public function setEndColumn(int $endColumn)
    {
        $this->endColumn = $endColumn;

        return $this;
    }

    /**
     * Get end column
     *
     * @return int
     */
    public function getEndColumn()
    {
        return $this->endColumn;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set file
     *
     * @param FileEntity $file
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
     * @return FileEntity
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Get package
     *
     * @return string
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * Set package
     *
     * @param string $package
     * @return $this
     */
    public function setPackage(string $package)
    {
        $this->package = $package;

        return $this;
    }
}
