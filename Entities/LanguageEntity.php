<?php

namespace RIPS\ConnectorBundle\Entities;

class LanguageEntity
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
     * @var array
     */
    protected $fileExtensions;

    /**
     * @var array
     */
    protected $configFileExtensions;

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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set file extensions
     *
     * @param array $fileExtensions
     * @return $this
     */
    public function setFileExtensions(array $fileExtensions = [])
    {
        $this->fileExtensions = $fileExtensions;

        return $this;
    }

    /**
     * Get file extensions
     *
     * @return array
     */
    public function getFileExtensions()
    {
        return $this->fileExtensions;
    }

    /**
     * Set config file extensions
     *
     * @param array $configFileExtensions
     */
    public function setConfigFileExtensions(array $configFileExtensions)
    {
        $this->configFileExtensions = $configFileExtensions;
    }

    /**
     * Get config file extensions
     *
     * @return array
     */
    public function getConfigFileExtensions()
    {
        return $this->configFileExtensions;
    }
}
