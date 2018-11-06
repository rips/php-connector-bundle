<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;

class CustomEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var Custom\SettingEntity
     */
    protected $setting;

    /**
     * @var Custom\ControllerEntity[]
     */
    protected $controllers;

    /**
     * @var Custom\SourceEntity[]
     */
    protected $sources;

    /**
     * @var Custom\SinkEntity[]
     */
    protected $sinks;

    /**
     * @var Custom\ValidatorEntity[]
     */
    protected $validators;

    /**
     * @var Custom\SanitiserEntity[]
     */
    protected $sanitisers;

    /**
     * @var Custom\IgnoreEntity[]
     */
    protected $ignores;

    /**
     * @var Custom\ExtensionEntity[]
     */
    protected $extensions;

    /**
     * @var ScanEntity[]
     */
    protected $scans;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var DateTime
     */
    protected $createdAt;

    /**
     * @var UserEntity
     */
    protected $createdBy;

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    
    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get setting
     *
     * @return Custom\SettingEntity
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * Set setting
     *
     * @param Custom\SettingEntity $setting
     * @return $this
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;

        return $this;
    }

    /**
     * Get controllers
     *
     * @return Custom\ControllerEntity[]
     */
    public function getControllers()
    {
        return $this->controllers;
    }

    /**
     * Set controllers
     *
     * @param Custom\ControllerEntity[] $controllers
     * @return $this
     */
    public function setControllers(array $controllers)
    {
        $this->controllers = $controllers;

        return $this;
    }

    /**
     * Get sources
     *
     * @return Custom\SourceEntity[]
     */
    public function getSources()
    {
        return $this->sources;
    }
    
    /**
     * Set sources
     *
     * @param Custom\SourceEntity[] $sources
     * @return $this
     */
    public function setSources(array $sources)
    {
        $this->sources = $sources;
    
        return $this;
    }
    
    /**
     * Get sinks
     *
     * @return Custom\SinkEntity[]
     */
    public function getSinks()
    {
        return $this->sinks;
    }
    
    /**
     * Set sinks
     *
     * @param Custom\SinkEntity[] $sinks
     * @return $this
     */
    public function setSinks(array $sinks)
    {
        $this->sinks = $sinks;
    
        return $this;
    }
    
    /**
     * Get validators
     *
     * @return Custom\ValidatorEntity[]
     */
    public function getValidators()
    {
        return $this->validators;
    }
    
    /**
     * Set validators
     *
     * @param Custom\ValidatorEntity[] $validators
     * @return $this
     */
    public function setValidators(array $validators)
    {
        $this->validators = $validators;
    
        return $this;
    }
    
    /**
     * Get sanitisers
     *
     * @return Custom\SanitiserEntity[]
     */
    public function getSanitisers()
    {
        return $this->sanitisers;
    }
    
    /**
     * Set sanitisers
     *
     * @param Custom\SanitiserEntity[] $sanitisers
     * @return $this
     */
    public function setSanitisers(array $sanitisers)
    {
        $this->sanitisers = $sanitisers;
    
        return $this;
    }
    
    /**
     * Get ignores
     *
     * @return Custom\IgnoreEntity[]
     */
    public function getIgnores()
    {
        return $this->ignores;
    }
    
    /**
     * Set ignores
     *
     * @param Custom\IgnoreEntity[] $ignores
     * @return $this
     */
    public function setIgnores($ignores)
    {
        $this->ignores = $ignores;
    
        return $this;
    }
    
    /**
     * Get extensions
     *
     * @return Custom\ExtensionEntity[]
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    
    /**
     * Set extensions
     *
     * @param Custom\ExtensionEntity[] $extensions
     * @return $this
     */
    public function setExtensions(array $extensions)
    {
        $this->extensions = $extensions;
    
        return $this;
    }
    
    /**
     * Get scans
     *
     * @return ScanEntity[]
     */
    public function getScans()
    {
        return $this->scans;
    }
    
    /**
     * Set scans
     *
     * @param ScanEntity[] $scans
     * @return $this
     */
    public function setScans(array $scans)
    {
        $this->scans = $scans;
    
        return $this;
    }
    
    /**
     * Get application
     *
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }
    
    /**
     * Set application
     *
     * @param ApplicationEntity $application
     * @return $this
     */
    public function setApplication($application)
    {
        $this->application = $application;
    
        return $this;
    }

    /**
     * Set createdAt
     *
     * @param DateTime $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @return DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}
