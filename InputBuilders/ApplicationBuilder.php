<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ApplicationBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setApplicationName($name)
    {
        $this->name = $name;

        return $this;
    }
}
