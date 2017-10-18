<?php

namespace RIPS\ConnectorBundle\Entities\Application;

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
     * @var boolean
     */
    protected $global;

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
     * Get global
     *
     * @return boolean
     */
    public function getGlobal()
    {
        return $this->global;
    }
    
    /**
     * Set global
     *
     * @param boolean $global
     * @return $this
     */
    public function setGlobal($global)
    {
        $this->global = $global;
    
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
}
