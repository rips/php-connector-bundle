<?php

namespace RIPS\ConnectorBundle\Entities\Application;

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
     * @var SourceEntity[]
     */
    protected $sources;

    /**
     * @var SinkEntity[]
     */
    protected $sinks;

    /**
     * @var ValidatorEntity[]
     */
    protected $validators;

    /**
     * @var SanitiserEntity[]
     */
    protected $sanitisers;

    /**
     * @var IgnoreEntity[]
     */
    protected $ignores;

    /**
     * @var ExtensionEntity[]
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
     * @return SourceEntity[]
     */
    public function getSources()
    {
        return $this->sources;
    }
    
    /**
     * Set sources
     *
     * @param SourceEntity $sources
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
     * @return SinkEntity[]
     */
    public function getSinks()
    {
        return $this->sinks;
    }
    
    /**
     * Set sinks
     *
     * @param SinkEntity[] $sinks
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
     * @return ValidatorEntity[]
     */
    public function getValidators()
    {
        return $this->validators;
    }
    
    /**
     * Set validators
     *
     * @param ValidatorEntity[] $validators
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
     * @return SanitiserEntity[]
     */
    public function getSanitisers()
    {
        return $this->sanitisers;
    }
    
    /**
     * Set sanitisers
     *
     * @param SanitiserEntity[] $sanitisers
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
     * @return IgnoreEntity[]
     */
    public function getIgnores()
    {
        return $this->ignores;
    }
    
    /**
     * Set ignores
     *
     * @param IgnoreEntity[] $ignores
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
     * @return ExtensionEntity[]
     */
    public function getExtensions()
    {
        return $this->extensions;
    }
    
    /**
     * Set extensions
     *
     * @param ExtensionEntity[] $extensions
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
    public function setApplication(ApplicationEntity $application)
    {
        $this->application = $application;
    
        return $this;
    }
}
