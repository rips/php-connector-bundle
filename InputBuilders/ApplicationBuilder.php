<?php
/**
 * Created by PhpStorm.
 * User: kevin
 * Date: 16.08.17
 * Time: 10:32
 */

namespace RIPS\ConnectorBundle\InputBuilders;


class ApplicationBuilder extends BaseBuilder
{
    // @var string
    protected $applicationName;


    /**
     * Set applicationName
     *
     * @param string
     * @return void
     */
    public function setApplicationName(string $applicationName)
    {
        $this->applicationName = $applicationName;
    }
}