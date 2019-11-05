<?php

namespace RIPS\ConnectorBundle\Entities\History\Scan;

class JavaEntity
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
     * @var string
     */
    protected $implementation;

    /**
     * @return string
     */
    public function getMajorVersion()
    {
        return $this->majorVersion;
    }

    /**
     * @param string $majorVersion
     * @return JavaEntity
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
     * @return JavaEntity
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
     * @return JavaEntity
     */
    public function setReleaseVersion($releaseVersion)
    {
        $this->releaseVersion = $releaseVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * @param string $implementation
     * @return JavaEntity
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;

        return $this;
    }
}
