<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan\Issue;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class PatchBuilder extends BaseBuilder
{
    /**
     * @var int
     */
    protected $type;

    /**
     * @var int
     */
    protected $confidence;
    
    /**
     * Set type
     *
     * @param int $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setFields[] = 'type';
        $this->type = $type;
    
        return $this;
    }

    /**
     * Set Confidence
     *
     * @param int $confidence
     * @return $this
     */
    public function setConfidence($confidence)
    {
        $this->setFields[] = 'confidence';
        $this->confidence = $confidence;

        return $this;
    }
}
