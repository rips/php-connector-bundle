<?php

namespace RIPS\ConnectorBundle\Entities\Application;

use RIPS\ConnectorBundle\Entities\UserEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Entities\Application\ScanEntity;

class UploadEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $submission;
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $extension;

    /**
     * @var integer
     */
    protected $size;

    /**
     * @var string
     */
    protected $file;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var ScanEntity[]
     */
    protected $scans;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * Set id
     *
     * @param integer $id
     * @return void
     */
    public function setId(integer $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): integer
    {
        return $this->id;
    }

    /**
     * Set submission
     *
     * @param string $submission
     * @return void
     */
    public function setSubmission(string $submission)
    {
        $this->submission = $submission;
    }

    /**
     * Get submission
     *
     * @return string
     */
    public function getSubmission(): string
    {
        return $this->submission;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set extension
     *
     * @param string $extension
     * @return void
     */
    public function setExtension(string $extension)
    {
        $this->extension = $extension;
    }

    /**
     * Get extension
     *
     * @return string
     */
    public function getExtension(): string
    {
        return $this->extension;
    }

    /**
     * Set size
     *
     * @param integer $size
     * @return void
     */
    public function setSize(integer $size)
    {
        $this->size = $size;
    }

    /**
     * Get size
     *
     * @return integer
     */
    public function getSize(): integer
    {
        return $this->size;
    }

    /**
     * Set file
     *
     * @param string $file
     * @return void
     */
    public function setFile(string $file)
    {
        $this->file = $file;
    }

    /**
     * Get file
     *
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return void
     */
    public function setCreatedBy(UserEntity $createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy(): UserEntity
    {
        return $this->createdBy;
    }

    /**
     * Set scans
     *
     * @param ScanEntity[] $scans
     * @return void
     */
    public function setScans(array $scans)
    {
        $this->scans = $scans;
    }

    /**
     * Get scans
     *
     * @return ScanEntity[]
     */
    public function getScans(): array
    {
        return $this->scans;
    }

    /**
     * Set application
     *
     * @param ApplicationEntity $applicaiton
     * @return void
     */
    public function setApplication(ApplicationEntity $application)
    {
        $this->application = $application;
    }

    /**
     * Get application
     *
     * @return ApplicationEntity
     */
    public function getApplication(): ApplicationEntity
    {
        return $this->application;
    }
}
