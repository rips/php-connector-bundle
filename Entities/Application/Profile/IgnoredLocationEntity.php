<?php

namespace RIPS\ConnectorBundle\Entities\Application\Profile;

class IgnoredLocationEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $path;

    /**
     * @var string
     */
    protected $match;

    /**
     * @var string
     */
    protected $exclude;

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
     * Get path
     *
     * @return string
     */
    public function getPath()
    {
        return $this->path;
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
     * Get match
     *
     * @return string
     */
    public function getMatch()
    {
        return $this->match;
    }
    
    /**
     * Set match
     *
     * @param string $match
     * @return $this
     */
    public function setMatch($match)
    {
        $this->match = $match;
    
        return $this;
    }

    /**
     * Get exclude
     *
     * @return string
     */
    public function getExclude()
    {
        return $this->exclude;
    }
    
    /**
     * Set exclude
     *
     * @param string $exclude
     * @return $this
     */
    public function setExclude($exclude)
    {
        $this->exclude = $exclude;
    
        return $this;
    }
}
