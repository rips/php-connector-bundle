<?php

namespace RIPS\ConnectorBundle\Entities\Notification;

use RIPS\ConnectorBundle\Entities\Application\ScanEntity;
use RIPS\ConnectorBundle\Entities\ApplicationEntity;
use RIPS\ConnectorBundle\Entities\UserEntity;

class SubscriptionEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var int
     */
    protected $eventType;

    /**
     * @var UserEntity
     */
    protected $user;

    /**
     * @var string
     */
    protected $summaryInterval;

    /**
     * @var ScanEntity
     */
    protected $scan;

    /**
     * @var ApplicationEntity
     */
    protected $application;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var bool
     */
    protected $byMail;

    /**
     * @var bool
     */
    protected $byUserInterface;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return SubscriptionEntity
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * @param int $eventType
     * @return SubscriptionEntity
     */
    public function setEventType($eventType)
    {
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param UserEntity $user
     * @return SubscriptionEntity
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string
     */
    public function getSummaryInterval()
    {
        return $this->summaryInterval;
    }

    /**
     * @param string $summaryInterval
     * @return SubscriptionEntity
     */
    public function setSummaryInterval($summaryInterval)
    {
        $this->summaryInterval = $summaryInterval;

        return $this;
    }

    /**
     * @return ScanEntity
     */
    public function getScan()
    {
        return $this->scan;
    }

    /**
     * @param ScanEntity $scan
     * @return SubscriptionEntity
     */
    public function setScan($scan)
    {
        $this->scan = $scan;

        return $this;
    }

    /**
     * @return ApplicationEntity
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * @param ApplicationEntity $application
     * @return SubscriptionEntity
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @param \DateTime $createdAt
     * @return SubscriptionEntity
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * @return bool
     */
    public function isByMail()
    {
        return $this->byMail;
    }

    /**
     * @param bool $byMail
     * @return SubscriptionEntity
     */
    public function setByMail($byMail)
    {
        $this->byMail = $byMail;

        return $this;
    }

    /**
     * @return bool
     */
    public function isByUserInterface()
    {
        return $this->byUserInterface;
    }

    /**
     * @param bool $byUserInterface
     * @return SubscriptionEntity
     */
    public function setByUserInterface($byUserInterface)
    {
        $this->byUserInterface = $byUserInterface;

        return $this;
    }
}
