<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class FileBrowserEntity
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
     * @var string
     */
    protected $type;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return FileBrowserEntity
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getLoc()
    {
        return $this->loc;
    }

    /**
     * @param int $loc
     * @return FileBrowserEntity
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;

        return $this;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return FileBrowserEntity
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return FileBrowserEntity
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
}
