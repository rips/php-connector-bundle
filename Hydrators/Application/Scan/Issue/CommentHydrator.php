<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class CommentHydrator
{
    public static function hydrateCollection(array $comments)
    {
        $hydrated = [];

        foreach ($comments as $comment) {
            $hydrated[] = self::hydrate($comment);
        }

        return $hydrated;
    }

    public static function hydrate(\stdClass $comment)
    {
        $hydrated = new CommentEntity();

        if (isset($comment->id)) {
            $hydrated->setId($comment->id);
        }

        if (isset($comment->comment)) {
            $hydrated->setComment($comment->comment);
        }

        if (isset($comment->submission)) {
            $hydrated->setSubmission(new \DateTime($comment->submission));
        }

        if (isset($comment->created_by)) {
            $hydrated->setCreatedBy(UserHydrator::hydrate($comment->created_by));
        }

        if (isset($comment->issue)) {
            $hydrated->setIssue(IssueHydrator::hydrate($comment->issue));
        }

        return $hydrated;
    }
}
