<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use stdClass;
use DateTime;
use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;
use RIPS\ConnectorBundle\Hydrators\UserHydrator;
use RIPS\ConnectorBundle\Hydrators\Application\Scan\IssueHydrator;

class CommentHydrator
{
    /**
     * Hydrate a collection of comment objects into a collection of
     * CommentEntity objects
     *
     * @param stdClass[] $comments
     * @return CommentEntity[]
     */
    public static function hydrateCollection(array $comments)
    {
        $hydrated = [];

        foreach ($comments as $comment) {
            $hydrated[] = self::hydrate($comment);
        }

        return $hydrated;
    }

    /**
     * Hydrate a comment object into a CommentEntity object
     *
     * @param stdClass $comment
     * @return CommentEntity
     */
    public static function hydrate(stdClass $comment)
    {
        $hydrated = new CommentEntity();

        if (isset($comment->id)) {
            $hydrated->setId($comment->id);
        }

        if (isset($comment->comment)) {
            $hydrated->setComment($comment->comment);
        }

        if (isset($comment->created_at)) {
            $hydrated->setCreatedAt(new DateTime($comment->created_at));
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
