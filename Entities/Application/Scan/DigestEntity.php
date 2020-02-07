<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class DigestEntity
{
    /**
     * @var int
     */
    protected $unresolvedFunctions;

    /**
     * @var int
     */
    protected $unresolvedClasses;

    /**
     * @var int
     */
    protected $unresolvedMethods;

    /**
     * @var int
     */
    protected $resolvedFunctions;

    /**
     * @var int
     */
    protected $resolvedClasses;

    /**
     * @var int
     */
    protected $resolvedMethods;

    /**
     * @var int
     */
    protected $scannedFiles;

    /**
     * @return int
     */
    public function getUnresolvedFunctions()
    {
        return $this->unresolvedFunctions;
    }

    /**
     * @param int $unresolvedFunctions
     * @return DigestEntity
     */
    public function setUnresolvedFunctions($unresolvedFunctions)
    {
        $this->unresolvedFunctions = $unresolvedFunctions;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnresolvedClasses()
    {
        return $this->unresolvedClasses;
    }

    /**
     * @param int $unresolvedClasses
     * @return DigestEntity
     */
    public function setUnresolvedClasses($unresolvedClasses)
    {
        $this->unresolvedClasses = $unresolvedClasses;

        return $this;
    }

    /**
     * @return int
     */
    public function getUnresolvedMethods()
    {
        return $this->unresolvedMethods;
    }

    /**
     * @param int $unresolvedMethods
     * @return DigestEntity
     */
    public function setUnresolvedMethods($unresolvedMethods)
    {
        $this->unresolvedMethods = $unresolvedMethods;

        return $this;
    }

    /**
     * @return int
     */
    public function getResolvedFunctions()
    {
        return $this->resolvedFunctions;
    }

    /**
     * @param int $resolvedFunctions
     * @return DigestEntity
     */
    public function setResolvedFunctions($resolvedFunctions)
    {
        $this->resolvedFunctions = $resolvedFunctions;

        return $this;
    }

    /**
     * @return int
     */
    public function getResolvedClasses()
    {
        return $this->resolvedClasses;
    }

    /**
     * @param int $resolvedClasses
     * @return DigestEntity
     */
    public function setResolvedClasses($resolvedClasses)
    {
        $this->resolvedClasses = $resolvedClasses;

        return $this;
    }

    /**
     * @return int
     */
    public function getResolvedMethods()
    {
        return $this->resolvedMethods;
    }

    /**
     * @param int $resolvedMethods
     * @return DigestEntity
     */
    public function setResolvedMethods($resolvedMethods)
    {
        $this->resolvedMethods = $resolvedMethods;

        return $this;
    }

    /**
     * @return int
     */
    public function getScannedFiles()
    {
        return $this->scannedFiles;
    }

    /**
     * @param int $scannedFiles
     * @return DigestEntity
     */
    public function setScannedFiles($scannedFiles)
    {
        $this->scannedFiles = $scannedFiles;

        return $this;
    }
}
