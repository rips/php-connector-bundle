<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Process;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class UpdateBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $finish;
    
    /**
     * Set finish
     *
     * @param string $finish
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->finish = $finish;
    
        return $this;
    }
}
