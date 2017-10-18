<?php

namespace RIPS\ConnectorBundle\InputBuilders\User;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ResetBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $plainPassword;

    /**
     * @var string
     */
    protected $repeatPassword;

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
     * Set repeatPassword
     *
     * @param string $repeatPassword
     * @return $this
     */
    public function setRepeatPassword($repeatPassword)
    {
        $this->repeatPassword = $repeatPassword;
    
        return $this;
    }
}
