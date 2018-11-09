<?php

namespace RIPS\ConnectorBundle\Entities\Application\Profile;

use RIPS\ConnectorBundle\Entities\Application\ProfileEntity;

class ExtensionEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $extension;

    /**
     * @var ProfileEntity
     */
    protected $profile;
    
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
     * Get extension
     *
     * @return string
     */
    public function getExtension()
    {
        return $this->extension;
    }
    
    /**
     * Set extension
     *
     * @param string $extension
     * @return $this
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
    
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
}
