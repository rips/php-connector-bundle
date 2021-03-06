<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class UserBuilder extends BaseBuilder
{
    /**
     * @var integer
     */
    protected $chargedQuota;

    /**
     * @var array
     */
    protected $roles;

    /**
     * @var string
     */
    protected $plainPassword;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $firstname;

    /**
     * @var string
     */
    protected $lastname;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var integer
     */
    protected $organization;

    /**
     * @var boolean
     */
    protected $root;

    /**
     * @var array
     */
    protected $whitelistedIps;

    /**
     * Set chargedQuota
     *
     * @param integer $chargedQuota
     * @return $this
     */
    public function setChargedQuota($chargedQuota)
    {
        $this->setFields[] = 'chargedQuota';
        $this->chargedQuota = $chargedQuota;

        return $this;
    }

    /**
     * Set roles
     *
     * @param array $roles
     * @return $this
     */
    public function setRoles($roles)
    {
        $this->setFields[] = 'roles';
        $this->roles = $roles;

        return $this;
    }

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

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->setFields[] = 'firstname';
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->setFields[] = 'lastname';
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Set enabled
     *
     * @param boolean $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->setFields[] = 'enabled';
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Set organization
     *
     * @param integer $organization
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->setFields[] = 'organization';
        $this->organization = $organization;

        return $this;
    }

    /**
     * Set root
     *
     * @param boolean $root
     * @return $this
     */
    public function setRoot($root)
    {
        $this->setFields[] = 'root';
        $this->root = $root;

        return $this;
    }

    /**
     * Set whitelisted ips
     *
     * @param array $whitelistedIps
     * @return $this
     */
    public function setWhitelistedIps(array $whitelistedIps)
    {
        $this->setFields[] = 'whitelistedIps';
        $this->whitelistedIps = $whitelistedIps;

        return $this;
    }
}
