<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class UpdateBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $comment;
    
    /**
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->setFields[] = 'version';
        $this->version = $version;
    
        return $this;
    }

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
}
