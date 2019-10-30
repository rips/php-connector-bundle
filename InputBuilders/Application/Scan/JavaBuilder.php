<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class JavaBuilder extends BaseBuilder
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
     * @var string
     */
    protected $updateDatabase;

    /**
     * Set majorVersion
     *
     * @param string $majorVersion
     * @return $this
     */
    public function setMajorVersion($majorVersion)
    {
        $this->setFields[] = 'majorVersion';
        $this->majorVersion = $majorVersion;
    
        return $this;
    }

    /**
     * Set minorVersion
     *
     * @param string $minorVersion
     * @return $this
     */
    public function setMinorVersion($minorVersion)
    {
        $this->setFields[] = 'minorVersion';
        $this->minorVersion = $minorVersion;

        return $this;
    }

    /**
     * Set releaseVersion
     *
     * @param string $releaseVersion
     * @return $this
     */
    public function setReleaseVersion($releaseVersion)
    {
        $this->setFields[] = 'releaseVersion';
        $this->releaseVersion = $releaseVersion;

        return $this;
    }

    /**
     * Set implementation
     *
     * @param string $implementation
     * @return $this
     */
    public function setImplementation($implementation)
    {
        $this->setFields[] = 'implementation';
        $this->implementation = $implementation;

        return $this;
    }

    /**
     * Set updateDatabase
     *
     * @param string $updateDatabase
     * @return $this
     */
    public function setUpdateDatabase($updateDatabase)
    {
        $this->setFields[] = 'updateDatabase';
        $this->updateDatabase = $updateDatabase;

        return $this;
    }
}
