<?php

namespace RIPS\ConnectorBundle\InputBuilders\User;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ResetBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $email;

    /**
     * Set email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->setFields[] = 'email';
        $this->email = $email;
    
        return $this;
    }
}
