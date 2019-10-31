<?php

namespace RIPS\ConnectorBundle\InputBuilders\User\Mfa;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ChallengeBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $code;

    /**
     * Set code
     *
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->setFields[] = 'code';
        $this->code = $code;
    
        return $this;
    }
}
