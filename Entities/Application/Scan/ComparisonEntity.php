<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan;

class ComparisonEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $allowedMisses;

    /**
     * @var int
     */
    protected $filesThreshold;

    /**
     * @var int
     */
    protected $scannedOldFiles;

    /**
     * @var int
     */
    protected $scannedNewFiles;

    /**
     * @var int
     */
    protected $skippedOldFiles;

    /**
     * @var int
     */
    protected $skippedNewFiles;

    /**
     * @var int
     */
    protected $misses;

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
     * Get allowed misses
     *
     * @return int
     */
    public function getAllowedMisses()
    {
        return $this->allowedMisses;
    }

    /**
     * Set allowed misses
     *
     * @param int $allowedMisses
     * @return $this
     */
    public function setAllowedMisses(int $allowedMisses)
    {
        $this->allowedMisses = $allowedMisses;

        return $this;
    }

    /**
     * Get files threshold
     *
     * @return int
     */
    public function getFilesThreshold()
    {
        return $this->filesThreshold;
    }

    /**
     * Set files threshold
     *
     * @param int $filesThreshold
     * @return $this
     */
    public function setFilesThreshold(int $filesThreshold)
    {
        $this->filesThreshold = $filesThreshold;

        return $this;
    }

    /**
     * Get scanned old files
     *
     * @return int
     */
    public function getScannedOldFiles()
    {
        return $this->scannedOldFiles;
    }

    /**
     * Set scanned old files
     *
     * @param int $scannedOldFiles
     * @return $this
     */
    public function setScannedOldFiles(int $scannedOldFiles)
    {
        $this->scannedOldFiles = $scannedOldFiles;

        return $this;
    }

    /**
     * Get scanned new files
     *
     * @return int
     */
    public function getScannedNewFiles()
    {
        return $this->scannedNewFiles;
    }

    /**
     * Set scanned new files
     *
     * @param int $scannedNewFiles
     * @return $this
     */
    public function setScannedNewFiles(int $scannedNewFiles)
    {
        $this->scannedNewFiles = $scannedNewFiles;

        return $this;
    }

    /**
     * Get skipped old files
     *
     * @return int
     */
    public function getSkippedOldFiles()
    {
        return $this->skippedOldFiles;
    }

    /**
     * Set skipped old files
     *
     * @param int $skippedOldFiles
     * @return $this
     */
    public function setSkippedOldFiles(int $skippedOldFiles)
    {
        $this->skippedOldFiles = $skippedOldFiles;

        return $this;
    }

    /**
     * Get skipped new files
     *
     * @return int
     */
    public function getSkippedNewFiles()
    {
        return $this->skippedNewFiles;
    }

    /**
     * Set skipped new files
     *
     * @param int $skippedNewFiles
     * @return $this
     */
    public function setSkippedNewFiles(int $skippedNewFiles)
    {
        $this->skippedNewFiles = $skippedNewFiles;

        return $this;
    }

    /**
     * Get misses
     *
     * @return int
     */
    public function getMisses()
    {
        return $this->misses;
    }

    /**
     * Set misses
     *
     * @param int $misses
     * @return $this
     */
    public function setMisses(int $misses)
    {
        $this->misses = $misses;

        return $this;
    }
}
