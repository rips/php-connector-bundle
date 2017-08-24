<?php


namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issues;


use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\Sink\FileEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issues\Sink\FunctionEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class SourceEntity
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
    protected $name;

    /**
     * @var string
     */
    protected $parameter;

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
    public function getLine(): int
    {
        return $this->line;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * Set parameter
     *
     * @param string $parameter
     * @return void
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
    }

    /**
     * Get parameter
     *
     * @return string
     */
    public function getParameter():string
    {
        return $this->parameter;
    }

    /**
     * Set file
     *
     * @param FileEntity $file
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
     * @param ScanEntity $scan
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
     * @param FunctionEntity $function
     * @return void
     */
    public function setFunction($function)
    {
        $this->function = $function;
    }

    /**
     * get function
     *
     * @return FunctionEntity
     */
    public function getFunction(): FunctionEntity
    {
        return $this->function;
    }
}

