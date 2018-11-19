<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class FileEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $loc;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var boolean
     */
    protected $scanned;

    /**
     * @var string
     */
    protected $code;

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
     * Set loc (lines of code)
     *
     * @param int $loc
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * Get loc
     *
     * @return int
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * Set path
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set scanned
     *
     * @param boolean $scanned
     * @return $this
     */
    public function setScanned($scanned)
    {
        $this->scanned = $scanned;

        return $this;
    }

    /**
     * Get scanned
     *
     * @return boolean
     */
    public function getScanned()
    {
        return $this->scanned;
    }

    /**
     * Set code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }
}
