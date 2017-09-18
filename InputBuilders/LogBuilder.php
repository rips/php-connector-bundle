<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class LogBuilder extends BaseBuilder
{
    /** @var string */
    protected $text;

    /** @var string */
    protected $context;

    /** @var int */
    protected $level;

    /**
     * Set text
     *
     * @param  string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Set context
     *
     * @param  string $context
     * @return void
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Set level
     *
     * @param  int $level
     * @return void
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }
}
