<?php

namespace RIPS\ConnectorBundle\Entities\Application\Profile;

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
}
