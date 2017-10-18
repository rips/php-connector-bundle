<?php

namespace RIPS\ConnectorBundle\Entities;

class CensusEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $scans;

    /**
     * @var int
     */
    protected $issues;

    /**
     * @var int
     */
    protected $loc;
    
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
     * Get scans
     *
     * @return int
     */
    public function getScans()
    {
        return $this->scans;
    }
    
    /**
     * Set scans
     *
     * @param int $scans
     * @return $this
     */
    public function setScans($scans)
    {
        $this->scans = $scans;
    
        return $this;
    }
    
    /**
     * Get issues
     *
     * @return int
     */
    public function getIssues()
    {
        return $this->issues;
    }
    
    /**
     * Set issues
     *
     * @param int $issues
     * @return $this
     */
    public function setIssues($issues)
    {
        $this->issues = $issues;
    
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
     * Set loc
     *
     * @param int $loc
     * @return $this
     */
    public function setLoc($loc)
    {
        $this->loc = $loc;
    
        return $this;
    }
}
