<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

class CommentEntity
{
    /**
     * @var array
     */
    protected $comment;

    /**
     * Set comment
     *
     * @param array $comment
     * @return void
     */

    public function setComment(array $comment)
    {
        $this->comment = $comment;
    }

    /**
     * Get comment
     *
     * @return array
     */
    public function getComment(): array
    {
        return $this->comment;
    }
}
