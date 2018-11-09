<?php

namespace RIPS\ConnectorBundle\Entities\Application\Profile;

use RIPS\ConnectorBundle\Entities\Application\ProfileEntity;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\TypeEntity;

class SanitiserEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $class;

    /**
     * @var string
     */
    protected $method;

    /**
     * @var string
     */
    protected $parameter;

    /**
     * @var string
     */
    protected $characters;

    /**
     * @var ProfileEntity
     */
    protected $profile;

    /**
     * @var TypeEntity
     */
    protected $issueType;
    
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
     * Get class
     *
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
    
    /**
     * Set class
     *
     * @param string $class
     * @return $this
     */
    public function setClass($class)
    {
        $this->class = $class;
    
        return $this;
    }
    
    /**
     * Get method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }
    
    /**
     * Set method
     *
     * @param string $method
     * @return $this
     */
    public function setMethod($method)
    {
        $this->method = $method;
    
        return $this;
    }
    
    /**
     * Get parameter
     *
     * @return string
     */
    public function getParameter()
    {
        return $this->parameter;
    }
    
    /**
     * Set parameter
     *
     * @param string $parameter
     * @return $this
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
    
        return $this;
    }
    
    /**
     * Get characters
     *
     * @return string
     */
    public function getCharacters()
    {
        return $this->characters;
    }
    
    /**
     * Set characters
     *
     * @param string $characters
     * @return $this
     */
    public function setCharacters($characters)
    {
        $this->characters = $characters;
    
        return $this;
    }
    
    /**
     * Get profile
     *
     * @return ProfileEntity
     */
    public function getProfile()
    {
        return $this->profile;
    }
    
    /**
     * Set profile
     *
     * @param ProfileEntity $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    
        return $this;
    }

    /**
     * Get issue type
     *
     * @return TypeEntity
     */
    public function getIssueType()
    {
        return $this->issueType;
    }

    /**
     * Set issue type
     *
     * @param TypeEntity $issueType
     * @return $this
     */
    public function setIssueType(TypeEntity $issueType)
    {
        $this->issueType = $issueType;

        return $this;
    }
}
