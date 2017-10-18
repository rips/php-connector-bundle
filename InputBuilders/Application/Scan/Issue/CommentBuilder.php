<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class CommentBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $comment;
    
    /**
     * Set comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    
        return $this;
    }
}
