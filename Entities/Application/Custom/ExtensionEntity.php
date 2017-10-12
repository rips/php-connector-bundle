<?php

namespace RIPS\ConnectorBundle\Entities\Application\Custom;

use RIPS\ConnectorBundle\Entities\Application\CustomEntity;

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
     * @var CustomEntity
     */
    protected $custom;
    
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
     * Get custom
     *
     * @return CustomEntity
     */
    public function getCustom()
    {
        return $this->custom;
    }
    
    /**
     * Set custom
     *
     * @param CustomEntity $custom
     * @return $this
     */
    public function setCustom($custom)
    {
        $this->custom = $custom;
    
        return $this;
    }
}
