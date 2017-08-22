<?php


namespace RIPS\ConnectorBundle\Entities\Application;

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
    protected $allowUrlFOpen;

    /**
     * @var boolean
     */
    protected $allowUrlInclude;

    /**
     * @var string
     */
    protected $filterDefault;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set majorVersion
     *
     * @param int $majorVersion
     * @return void
     */
    public function setMajorVersion(int $majorVersion)
    {
        $this->majorVersion = $majorVersion;
    }

    /**
     * Get majorVersion
     *
     * @return int
     */
    public function getMajorVersion(): int
    {
        return $this->majorVersion;
    }

    /**
     * Set minorVersion
     *
     * @param int $minorVersion
     * @return void
     */
    public function setMinorVersion(int $minorVersion)
    {
        $this->minorVersion = $minorVersion;
    }

    /**
     * Get minorVersion
     *
     * @return int
     */
    public function getMinorVersion(): int
    {
        return $this->minorVersion;
    }

    /**
     * Set majorVersion
     *
     * @param  int $majorVersion
     * @return void
     */

    public function setReleaseVersion(int $releaseVersion)
    {
        $this->releaseVersion = $releaseVersion;
    }

    /**
     * Get releaseVersion
     *
     * @return int
     */
    public function getReleaseVersion(): int
    {
        return $this->releaseVersion;
    }

    /**
     * Set magicQuotesGpc
     *
     * @param boolean
     * @return void
     */
    public function setMagicQuotesGpc(bool $magicQuotesGpc)
    {
        $this->magicQuotesGpc = $magicQuotesGpc;
    }

    /**
     * Get magicQuotes
     *
     * @return bool
     */
    public function getMagicQuotesGpc(): bool
    {
        return $this->magicQuotesGpc;
    }

    /**
     * Set registerGlobals
     *
     * @param bool
     * @return void
     */
    public function setRegisterGlobals(bool $registerGlobals)
    {
        $this->registerGlobals = $registerGlobals;
    }

    /**
     * Get registerGlobals
     *
     * @return bool
     */
    public function getRegisterGlobals(): bool
    {
        return $this->registerGlobals;
    }

    /**
     * Set allowUrlFOpen
     *
     * @param bool
     * @return void
     */
    public function setAllowUrlFOpen(bool $allowUrlFOpen)
    {
        $this->allowUrlFOpen = $allowUrlFOpen;
    }

    /**
     * Get allowUrlFOpen
     *
     * @return bool
     */
    public function getAllowUrlFOpen(): bool
    {
        return $this->allowUrlFOpen;
    }

    /**
     * Set allowUrlInclude
     *
     * @param bool
     * @return void
     */
    public function setAllowUrlInclude(bool $allowUrlInclude)
    {
        $this->allowUrlInclude = $allowUrlInclude;
    }

    /**
     * Get allowUrlInclude
     *
     * @return bool
     */
    public function getAllowUrlInclude(): bool
    {
        return $this->allowUrlInclude;
    }

    /**
     * Set filterDefault
     *
     * @param string
     * @return void
     */
    public function setFilterDefault(string $filterDefault)
    {
        $this->filterDefault = $filterDefault;
    }

    /**
     * Get filterDefault
     *
     * @return string
     */
    public function getFilterDefault(): string
    {
        return $this->filterDefault;
    }
}
