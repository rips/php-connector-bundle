<?php

namespace RIPS\ConnectorBundle\Entities\Status;

class CapabilitiesEntity
{
    /**
     * @var bool
     */
    protected $resetPassword;

    /**
     * @var bool
     */
    protected $inviteUser;

    /**
     * @var bool
     */
    protected $sendEmail;

    /**
     * @var bool
     */
    protected $ldap;

    /**
     * @return bool
     */
    public function isResetPassword()
    {
        return $this->resetPassword;
    }

    /**
     * @param bool $resetPassword
     * @return CapabilitiesEntity
     */
    public function setResetPassword($resetPassword)
    {
        $this->resetPassword = $resetPassword;

        return $this;
    }

    /**
     * @return bool
     */
    public function isInviteUser()
    {
        return $this->inviteUser;
    }

    /**
     * @param bool $inviteUser
     * @return CapabilitiesEntity
     */
    public function setInviteUser($inviteUser)
    {
        $this->inviteUser = $inviteUser;

        return $this;
    }

    /**
     * @return bool
     */
    public function isSendEmail()
    {
        return $this->sendEmail;
    }

    /**
     * @param bool $sendEmail
     * @return CapabilitiesEntity
     */
    public function setSendEmail($sendEmail)
    {
        $this->sendEmail = $sendEmail;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLdap()
    {
        return $this->ldap;
    }

    /**
     * @param bool $ldap
     * @return CapabilitiesEntity
     */
    public function setLdap($ldap)
    {
        $this->ldap = $ldap;

        return $this;
    }
}
