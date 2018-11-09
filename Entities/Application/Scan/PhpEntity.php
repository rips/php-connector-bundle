<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\Application\Profile\SettingEntity;

class PhpEntity
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
     * @var boolean
     */
    protected $magicQuotesGpc;

    /**
     * @var boolean
     */
    protected $registerGlobals;

    /**
     * @var boolean
     */
    protected $allowUrlFopen;

    /**
     * @var boolean
     */
    protected $allowUrlInclude;

    /**
     * @var string
     */
    protected $filterDefault;

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
     * Set magicQuotesGpc
     *
     * @param  boolean
     * @return void
     */
    public function setMagicQuotesGpc($magicQuotesGpc)
    {
        $this->magicQuotesGpc = $magicQuotesGpc;
    }

    /**
     * Get magicQuotes
     *
     * @return bool
     */
    public function getMagicQuotesGpc()
    {
        return $this->magicQuotesGpc;
    }

    /**
     * Set registerGlobals
     *
     * @param  bool
     * @return void
     */
    public function setRegisterGlobals($registerGlobals)
    {
        $this->registerGlobals = $registerGlobals;
    }

    /**
     * Get registerGlobals
     *
     * @return bool
     */
    public function getRegisterGlobals()
    {
        return $this->registerGlobals;
    }

    /**
     * Set allowUrlFopen
     *
     * @param  bool
     * @return void
     */
    public function setAllowUrlFopen($allowUrlFopen)
    {
        $this->allowUrlFopen = $allowUrlFopen;
    }

    /**
     * Get allowUrlFopen
     *
     * @return bool
     */
    public function getAllowUrlFopen()
    {
        return $this->allowUrlFopen;
    }

    /**
     * Set allowUrlInclude
     *
     * @param  bool
     * @return void
     */
    public function setAllowUrlInclude($allowUrlInclude)
    {
        $this->allowUrlInclude = $allowUrlInclude;
    }

    /**
     * Get allowUrlInclude
     *
     * @return bool
     */
    public function getAllowUrlInclude()
    {
        return $this->allowUrlInclude;
    }

    /**
     * Set filterDefault
     *
     * @param  string
     * @return void
     */
    public function setFilterDefault($filterDefault)
    {
        $this->filterDefault = $filterDefault;
    }

    /**
     * Get filterDefault
     *
     * @return string
     */
    public function getFilterDefault()
    {
        return $this->filterDefault;
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
