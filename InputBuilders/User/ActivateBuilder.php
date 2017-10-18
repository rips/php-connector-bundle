<?php

namespace RIPS\ConnectorBundle\InputBuilders\User;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ActivateBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $plainPassword;

    /**
     * @var string
     */
    protected $username;

    /**
     * Set plainPassword
     *
     * @param string $plainPassword
     * @return $this
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;

        return $this;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }
}
