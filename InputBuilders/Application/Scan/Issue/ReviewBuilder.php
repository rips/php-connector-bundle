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
     * @var string
     */
    protected $source;
    
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
