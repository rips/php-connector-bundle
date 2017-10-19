<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Process;

use DateTime;
use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class UpdateBuilder extends BaseBuilder
{
    /**
     * @var DateTime
     */
    protected $finish;
    
    /**
     * Set finish
     *
     * @param DateTime $finish
     * @return $this
     */
    public function setFinish($finish)
    {
        $this->setFields[] = 'finish';
        $this->finish = $finish;
    
        return $this;
    }
}
