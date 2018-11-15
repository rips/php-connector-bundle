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
     * Set plainPassword
     *
     * @param string $plainPassword
     * @return $this
     */
    public function setPlainPassword($plainPassword)
    {
        $this->setFields[] = 'plainPassword';
        $this->plainPassword = $plainPassword;

        return $this;
    }
}
