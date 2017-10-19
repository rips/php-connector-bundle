<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ReviewBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $type;
    
    /**
     * Set type
     *
     * @param int $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setFields[] = 'type';
        $this->type = $type;
    
        return $this;
    }
}
