<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Process;

use DateTime;
use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class UpdateBuilder extends BaseBuilder
{
    /**
     * @var DateTime
     */
    protected $finishedAt;

    /**
     * @var boolean
     */
    protected $finished;
    
    /**
     * Set finishedAt
     *
     * @param DateTime $finishedAt
     * @return $this
     */
    public function setFinish($finishedAt)
    {
        $this->setFields[] = 'finishedAt';
        $this->finishedAt = $finishedAt;
    
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
