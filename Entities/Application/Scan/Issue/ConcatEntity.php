<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink\FileEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink\FunctionEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class ConcatEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var array
     */
    protected $comment;

    /**
     * @var FileEntity
     */
    protected $file;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var FunctionEntity
     */
    protected $function;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set comment
     *
     * @param  array $comment
     * @return void
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return array
     */
    public function getComment():array
    {
        return $this->comment;
    }

    /**
     * Set file
     *
     * @param  FileEntity $file
     * @return void
     */
    public function setFile($file)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return FileEntity
     */
    public function getFile(): FileEntity
    {
        return $this->file;
    }

    /**
     * Set scan
     *
     * @param  ScanEntity $scan
     * @return void
     */
    public function setScan($scan)
    {
        $this->scan = $scan;
    }

    /**
     * Get scan
     *
     * @return ScanEntity
     */
    public function getScan(): ScanEntity
    {
        return $this->scan;
    }

    /**
     * Set function
     *
     * @param  FunctionEntity $function
     * @return void
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }

    /**
     * Get function
     *
     * @return FunctionEntity
     */
    public function getFunction():FunctionEntity
    {
        return $this->function;
    }
}
