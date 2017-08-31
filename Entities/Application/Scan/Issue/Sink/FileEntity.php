<?php


namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Sink;

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
     * Set loc (lines of code)
     *
     * @param  int $loc
     * @return void
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
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
     * @param  string $path
     * @return void
     */
    public function setPath($path)
    {
        $this->path = $path;
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
}
