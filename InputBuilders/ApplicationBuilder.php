<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class ApplicationBuilder extends BaseBuilder
{
    // @var string
    protected $applicationName;

    /**
     * Set applicationName
     *
     * @param  string
     * @return void
     */
    public function setApplicationName($applicationName)
    {
        $this->applicationName = $applicationName;
    }
}
