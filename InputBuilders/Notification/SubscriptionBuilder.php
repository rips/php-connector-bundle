<?php

namespace RIPS\ConnectorBundle\InputBuilders\Notification;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class SubscriptionBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $eventType;

    /**
     * @var int
     */
    protected $user;

    /**
     * @var int
     */
    protected $scan;

    /**
     * @var int
     */
    protected $application;

    /**
     * @var bool
     */
    protected $byMail;

    /**
     * @var bool
     */
    protected $byUserInterface;

    /**
     * @param int $eventType
     * @return SubscriptionBuilder
     */
    public function setEventType($eventType)
    {
        $this->setFields[] = 'eventType';
        $this->eventType = $eventType;

        return $this;
    }

    /**
     * @param int $user
     * @return SubscriptionBuilder
     */
    public function setUser($user)
    {
        $this->setFields[] = 'user';
        $this->user = $user;

        return $this;
    }

    /**
     * @param int $scan
     * @return SubscriptionBuilder
     */
    public function setScan($scan)
    {
        $this->setFields[] = 'scan';
        $this->scan = $scan;

        return $this;
    }

    /**
     * @param int $application
     * @return SubscriptionBuilder
     */
    public function setApplication($application)
    {
        $this->setFields[] = 'application';
        $this->application = $application;

        return $this;
    }

    /**
     * @param bool $byMail
     * @return SubscriptionBuilder
     */
    public function setByMail($byMail)
    {
        $this->setFields[] = 'byMail';
        $this->byMail = $byMail;

        return $this;
    }

    /**
     * @param bool $byUserInterface
     * @return SubscriptionBuilder
     */
    public function setByUserInterface($byUserInterface)
    {
        $this->setFields[] = 'byUserInterface';
        $this->byUserInterface = $byUserInterface;

        return $this;
    }
}
