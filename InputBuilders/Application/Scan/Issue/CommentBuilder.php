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
     * @var string
     */
    protected $source;
    
    /**
     * Set comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment)
    {
        $this->setFields[] = 'comment';
        $this->comment = $comment;
    
        return $this;
    }

    /**
     * Set source
     *
     * @param string $source
     * @return $this
     */
    public function setSource($source)
    {
        $this->setFields[] = 'source';
        $this->source = $source;

        return $this;
    }
}
