<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class PhpBuilder extends BaseBuilder
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
     * Set magicQuotesGpc
     *
     * @param boolean $magicQuotesGpc
     * @return $this
     */
    public function setMagicQuotesGpc($magicQuotesGpc)
    {
        $this->setFields[] = 'magicQuotesGpc';
        $this->magicQuotesGpc = $magicQuotesGpc;

        return $this;
    }

    /**
     * Set registerGlobals
     *
     * @param boolean $registerGlobals
     * @return $this
     */
    public function setRegisterGlobals($registerGlobals)
    {
        $this->setFields[] = 'registerGlobals';
        $this->registerGlobals = $registerGlobals;

        return $this;
    }

    /**
     * Set allowUrlFopen
     *
     * @param boolean $allowUrlFopen
     * @return $this
     */
    public function setAllowUrlFopen($allowUrlFopen)
    {
        $this->setFields[] = 'allowUrlFopen';
        $this->allowUrlFopen = $allowUrlFopen;

        return $this;
    }

    /**
     * Set allowUrlInclude
     *
     * @param boolean $allowUrlInclude
     * @return $this
     */
    public function setAllowUrlInclude($allowUrlInclude)
    {
        $this->setFields[] = 'allowUrlInclude';
        $this->allowUrlInclude = $allowUrlInclude;

        return $this;
    }

    /**
     * Set filterDefault
     *
     * @param string $filterDefault
     * @return $this
     */
    public function setFilterDefault($filterDefault)
    {
        $this->setFields[] = 'filterDefault';
        $this->filterDefault = $filterDefault;

        return $this;
    }
}
