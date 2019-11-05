<?php

namespace RIPS\ConnectorBundle\Entities\History\Scan;

class PhpEntity
{
    /**
     * @var string
     */
    protected $majorVersion;

    /**
     * @var string
     */
    protected $minorVersion;

    /**
     * @var string
     */
    protected $releaseVersion;

    /**
     * @var bool
     */
    protected $magicQuotesGpc;

    /**
     * @var bool
     */
    protected $registerGlobals;

    /**
     * @var bool
     */
    protected $allowUrlFopen;

    /**
     * @var bool
     */
    protected $frameworkHinting;

    /**
     * @var bool
     */
    protected $allowUrlInclude;

    /**
     * @var string
     */
    protected $filterDefault;

    /**
     * @return string
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * @param string $majorVersion
     * @return PhpEntity
     */
    public function setMajorVersion($majorVersion)
    {
        $this->majorVersion = $majorVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getMinorVersion()
    {
        return $this->minorVersion;
    }

    /**
     * @param string $minorVersion
     * @return PhpEntity
     */
    public function setMinorVersion($minorVersion)
    {
        $this->minorVersion = $minorVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getReleaseVersion()
    {
        return $this->releaseVersion;
    }

    /**
     * @param string $releaseVersion
     * @return PhpEntity
     */
    public function setReleaseVersion($releaseVersion)
    {
        $this->releaseVersion = $releaseVersion;

        return $this;
    }

    /**
     * @return bool
     */
    public function isMagicQuotesGpc()
    {
        return $this->magicQuotesGpc;
    }

    /**
     * @param bool $magicQuotesGpc
     * @return PhpEntity
     */
    public function setMagicQuotesGpc($magicQuotesGpc)
    {
        $this->magicQuotesGpc = $magicQuotesGpc;

        return $this;
    }

    /**
     * @return bool
     */
    public function isRegisterGlobals()
    {
        return $this->registerGlobals;
    }

    /**
     * @param bool $registerGlobals
     * @return PhpEntity
     */
    public function setRegisterGlobals($registerGlobals)
    {
        $this->registerGlobals = $registerGlobals;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowUrlFopen()
    {
        return $this->allowUrlFopen;
    }

    /**
     * @param bool $allowUrlFopen
     * @return PhpEntity
     */
    public function setAllowUrlFopen($allowUrlFopen)
    {
        $this->allowUrlFopen = $allowUrlFopen;

        return $this;
    }

    /**
     * @return bool
     */
    public function isFrameworkHinting()
    {
        return $this->frameworkHinting;
    }

    /**
     * @param bool $frameworkHinting
     * @return PhpEntity
     */
    public function setFrameworkHinting($frameworkHinting)
    {
        $this->frameworkHinting = $frameworkHinting;

        return $this;
    }

    /**
     * @return bool
     */
    public function isAllowUrlInclude()
    {
        return $this->allowUrlInclude;
    }

    /**
     * @param bool $allowUrlInclude
     * @return PhpEntity
     */
    public function setAllowUrlInclude($allowUrlInclude)
    {
        $this->allowUrlInclude = $allowUrlInclude;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilterDefault()
    {
        return $this->filterDefault;
    }

    /**
     * @param string $filterDefault
     * @return PhpEntity
     */
    public function setFilterDefault($filterDefault)
    {
        $this->filterDefault = $filterDefault;

        return $this;
    }
}
