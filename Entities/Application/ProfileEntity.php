<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use DateTime;
use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;

class ProfileEntity
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
     * @var Profile\SettingEntity
     */
    protected $setting;

    /**
     * @var Profile\ControllerEntity[]
     */
    protected $controllers;

    /**
     * @var Profile\SourceEntity[]
     */
    protected $sources;

    /**
     * @var Profile\SinkEntity[]
     */
    protected $sinks;

    /**
     * @var Profile\ValidatorEntity[]
     */
    protected $validators;

    /**
     * @var Profile\SanitizerEntity[]
     */
    protected $sanitizers;

    /**
     * @var Profile\IgnoredCodeEntity[]
     */
    protected $ignoredCodes;

    /**
     * @var Profile\IgnoredLocationEntity[]
     */
    protected $ignoredLocations;

    /**
     * @var Profile\ExtensionEntity[]
     */
    protected $extensions;

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
     * @var bool
     */
    protected $default;

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
     * @return Profile\SettingEntity
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * Set setting
     *
     * @param Profile\SettingEntity $setting
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
     * @return Profile\ControllerEntity[]
     */
    public function getControllers()
    {
        return $this->controllers;
    }

    /**
     * Set controllers
     *
     * @param Profile\ControllerEntity[] $controllers
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
     * @return Profile\SourceEntity[]
     */
    public function getSources()
    {
        return $this->sources;
    }
    
    /**
     * Set sources
     *
     * @param Profile\SourceEntity[] $sources
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
     * @return Profile\SinkEntity[]
     */
    public function getSinks()
    {
        return $this->sinks;
    }
    
    /**
     * Set sinks
     *
     * @param Profile\SinkEntity[] $sinks
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
     * @return Profile\ValidatorEntity[]
     */
    public function getValidators()
    {
        return $this->validators;
    }
    
    /**
     * Set validators
     *
     * @param Profile\ValidatorEntity[] $validators
     * @return $this
     */
    public function setValidators(array $validators)
    {
        $this->validators = $validators;
    
        return $this;
    }
    
    /**
     * Get sanitizers
     *
     * @return Profile\SanitizerEntity[]
     */
    public function getSanitizers()
    {
        return $this->sanitizers;
    }
    
    /**
     * Set sanitizers
     *
     * @param Profile\SanitizerEntity[] $sanitizers
     * @return $this
     */
    public function setSanitizers(array $sanitizers)
    {
        $this->sanitizers = $sanitizers;
    
        return $this;
    }
    
    /**
     * Get ignoredCodes
     *
     * @return Profile\IgnoredCodeEntity[]
     */
    public function getIgnoredCodes()
    {
        return $this->ignoredCodes;
    }

    /**
     * Set ignoredCodes
     *
     * @param Profile\IgnoredCodeEntity[] $ignoredCodes
     * @return $this
     */
    public function setIgnoredCodes($ignoredCodes)
    {
        $this->ignoredCodes = $ignoredCodes;
    
        return $this;
    }

    /**
     * Get ignoredLocations
     *
     * @return Profile\IgnoredLocationEntity[]
     */
    public function getIgnoredLocations()
    {
        return $this->ignoredLocations;
    }

    /**
     * Set ignoredLocations
     *
     * @param Profile\IgnoredLocationEntity[] $ignoredLocations
     * @return $this
     */
    public function setIgnoredLocations($ignoredLocations)
    {
        $this->ignoredLocations = $ignoredLocations;

        return $this;
    }

    /**
     * Get extensions
     *
     * @return Profile\ExtensionEntity[]
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    
    /**
     * Set extensions
     *
     * @param Profile\ExtensionEntity[] $extensions
     * @return $this
     */
    public function setExtensions(array $extensions)
    {
        $this->extensions = $extensions;
    
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

    /**
     * Set default
     *
     * @param bool $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->default = $default;

        return $this;
    }

    /**
     * Get default
     *
     * @return bool
     */
    public function getDefault()
    {
        return $this->default;
    }
}
