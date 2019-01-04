<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue\Context;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class PartBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $content;
    
    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setFields[] = 'type';
        $this->type = $type;
    
        return $this;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return $this
     */
    public function setContent($content)
    {
        $this->setFields[] = 'content';
        $this->content = $content;

        return $this;
    }
}
