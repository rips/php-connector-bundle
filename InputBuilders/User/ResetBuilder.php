<?php

namespace RIPS\ConnectorBundle\InputBuilders\User;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ResetBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $username;

    /**
     * @var string
     */
    protected $email;

    /**
     * Set username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->setFields[] = 'username';
        $this->username = $username;

        return $this;
    }
    
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
