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
     * @var boolean
     */
    protected $finished;
    
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

    /**
     * Set finished
     *
     * @param boolean $finished
     * @return $this
     */
    public function setFinished($finished)
    {
        $this->setFields[] = 'finished';
        $this->finished = $finished;

        return $this;
    }
}
