<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\Application\Custom\SettingEntity;

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
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var SettingEntity
     */
    protected $setting;

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
    public function setImplementation(string $implementation)
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
     * Set scan
     *
     * @param ScanEntity $scan
     * @return void
     */
    public function setScan($scan)
    {
        $this->scan = $scan;
    }

    /**
     * Get scan
     *
     * @return ScanEntity
     */
    public function getScan()
    {
        return $this->scan;
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
}
