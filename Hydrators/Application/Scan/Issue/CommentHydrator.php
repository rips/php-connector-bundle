<?php

namespace RIPS\ConnectorBundle\Hydrators\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\Issue\CommentEntity;

class CommentHydrator
{
    /**
     * Hydrate a collection of comment objects into a collection of
     * CommentEntity objects
     *
     * @param  array<\stdClass> $comment
     * @return array<CommentEntity>
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
     * @param  \stdClass $comment
     * @return CommentEntity
     */
    public static function hydrate(\stdClass $comment)
    {
        $hydrated = new CommentEntity();

        if (isset($comment)){
            $hydrated->setComment($comment->comment);
        }
    }
}
