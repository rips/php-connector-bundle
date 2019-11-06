<?php

namespace RIPS\ConnectorBundle\Hydrators\Notification;

use RIPS\ConnectorBundle\Entities\Notification\MessageEntity;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\CommentHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue\ReviewHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\ScanHydrator;
use RIPS\ConnectorBundle\Hydrators\ApplicationHydrator;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;

class MessageHydrator
{
    /**
     * Hydrate a collection of notification message objects into a collection of
     * MessageEntity objects
     *
     * @param \stdClass[] $messages
     * @return MessageEntity[]
     */
    public static function hydrateCollection(array $messages)
    {
        $hydrated = [];

        foreach ($messages as $message) {
            $hydrated[] = self::hydrate($message);
        }

        return $hydrated;
    }

    /**
     * Hydrate a notification message object into a MessageEntity object
     *
     * @param \stdClass $message
     * @return MessageEntity
     */
    public static function hydrate(\stdClass $message)
    {
        $hydrated = new MessageEntity();

        if (isset($message->id)) {
            $hydrated->setId($message->id);
        }

        if (isset($message->event_type)) {
            $hydrated->setEventType($message->event_type);
        }

        if (isset($message->user)) {
            $hydrated->setUser(UserHydrator::hydrate($message->user));
        }

        if (isset($message->user_target)) {
            $hydrated->setUserTarget(UserHydrator::hydrate($message->user_target));
        }

        if (isset($message->scan)) {
            $hydrated->setScan(ScanHydrator::hydrate($message->scan));
        }

        if (isset($message->application)) {
            $hydrated->setApplication(ApplicationHydrator::hydrate($message->application));
        }

        if (isset($message->created_at)) {
            $hydrated->setCreatedAt(new \DateTime($message->created_at));
        }

        if (isset($message->fetched_at)) {
            $hydrated->setFetchedAt(new \DateTime($message->fetched_at));
        }

        if (isset($message->read_at)) {
            $hydrated->setReadAt(new \DateTime($message->read_at));
        }

        if (isset($message->issue)) {
            $hydrated->setIssue(IssueHydrator::hydrate($message->issue));
        }

        if (isset($message->comment)) {
            $hydrated->setComment(CommentHydrator::hydrate($message->comment));
        }

        if (isset($message->review)) {
            $hydrated->setReview(ReviewHydrator::hydrate($message->review));
        }

        return $hydrated;
    }
}
