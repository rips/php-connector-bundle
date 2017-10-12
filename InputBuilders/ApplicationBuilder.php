<?php

namespace RIPS\ConnectorBundle\InputBuilders;

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
