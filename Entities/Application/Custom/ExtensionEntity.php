<?php

namespace RIPS\ConnectorBundle\Entities\Application\Custom;

use \DateTime;

class ExtensionEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $applicationId;

    /**
     * @var int
     */
    protected $organisationId;

    /**
     * @var DateTime
     */
    protected $at;
    
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
     * Get applicationId
     *
     * @return int
     */
    public function getApplicationId()
    {
        return $this->applicationId;
    }
    
    /**
     * Set applicationId
     *
     * @param int $applicationId
     * @return $this
     */
    public function setApplicationId($applicationId)
    {
        $this->applicationId = $applicationId;
    
        return $this;
    }
    
    /**
     * Get organisationId
     *
     * @return int
     */
    public function getOrganisationId()
    {
        return $this->organisationId;
    }
    
    /**
     * Set organisationId
     *
     * @param int $organisationId
     * @return $this
     */
    public function setOrganisationId($organisationId)
    {
        $this->organisationId = $organisationId;
    
        return $this;
    }
    
    /**
     * Get at
     *
     * @return DateTime
     */
    public function getAt()
    {
        return $this->at;
    }
    
    /**
     * Set at
     *
     * @param DateTime $at
     * @return $this
     */
    public function setAt(DateTime $at)
    {
        $this->at = $at;
    
        return $this;
    }
}
