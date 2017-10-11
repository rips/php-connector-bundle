<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class ApplicationBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $applicationName;

    /**
     * Set applicationName
     *
     * @param string $applicationName
     * @return $this
     */
    public function setApplicationName($applicationName)
    {
        $this->applicationName = $applicationName;

        return $this;
    }
}
