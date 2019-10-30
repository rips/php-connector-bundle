<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\Profile\SettingEntity;

class JavaEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $majorVersion;

    /**
     * @var int
     */
    protected $minorVersion;

    /**
     * @var int
     */
    protected $releaseVersion;

    /**
     * @var string
     */
    protected $implementation;

    /**
     * @var SettingEntity
     */
    protected $setting;

    /**
     * @var string
     */
    protected $updateDatabase;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set majorVersion
     *
     * @param  int $majorVersion
     * @return void
     */
    public function setMajorVersion($majorVersion)
    {
        $this->majorVersion = $majorVersion;
    }

    /**
     * Get majorVersion
     *
     * @return int
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * Set minorVersion
     *
     * @param  int $minorVersion
     * @return void
     */
    public function setMinorVersion($minorVersion)
    {
        $this->minorVersion = $minorVersion;
    }

    /**
     * Get minorVersion
     *
     * @return int
     */
    public function getMinorVersion()
    {
        return $this->minorVersion;
    }

    /**
     * Set majorVersion
     *
     * @param  int $releaseVersion
     * @return void
     */

    public function setReleaseVersion($releaseVersion)
    {
        $this->releaseVersion = $releaseVersion;
    }

    /**
     * Get releaseVersion
     *
     * @return int
     */
    public function getReleaseVersion()
    {
        return $this->releaseVersion;
    }

    /**
     * Set implementation
     *
     * @param string $implementation
     * @return $this
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;

        return $this;
    }

    /**
     * Get implementation
     *
     * @return string
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * Set setting
     *
     * @param SettingEntity $setting
     * @return void
     */
    public function setSetting($setting)
    {
        $this->setting = $setting;
    }

    /**
     * Get setting
     *
     * @return SettingEntity
     */
    public function getSetting()
    {
        return $this->setting;
    }

    /**
     * Set updateDatabase
     *
     * @param string $updateDatabase
     * @return $this
     */
    public function setUpdateDatabase($updateDatabase)
    {
        $this->updateDatabase = $updateDatabase;

        return $this;
    }

    /**
     * Get updateDatabase
     *
     * @return string
     */
    public function getUpdateDatabase()
    {
        return $this->updateDatabase;
    }
}
