<?php

namespace RIPS\ConnectorBundle\InputBuilders\System\Email;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class TestBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $email;

    /**
     * @param string $email
     * @return TestBuilder
     */
    public function setEmail($email)
    {
        $this->setFields[] = 'email';
        $this->email = $email;

        return $this;
    }
}
