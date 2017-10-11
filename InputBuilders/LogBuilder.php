<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class LogBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $text;

    /**
     * @var int
     */
    protected $level;

    /**
     * @var string
     */
    protected $context;
    
    /**
     * Set text
     *
     * @param string $text
     * @return $this
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }
    
    /**
     * Set level
     *
     * @param int $level
     * @return $this
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }
    
    /**
     * Set context
     *
     * @param string $context
     * @return $this
     */
    public function setContext($context)
    {
        $this->context = $context;
    
        return $this;
    }
}
