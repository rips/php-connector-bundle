<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class UserBuilder extends BaseBuilder
{
    /** @var string */
    protected $email;

    /** @var string */
    protected $username;

    /** @var string */
    protected $firstname;

    /** @var string */
    protected $lastname;

    /** @var string */
    protected $plainPassword;

    /** @var int */
    protected $organisation;

    /** @var array */
    protected $roles;

    /** @var bool */
    protected $root;

    /** @var bool */
    protected $enabled;

    /** @var array */
    protected $callbacks;

    /**
     * Set email
     *
     * @param  string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Set username
     *
     * @param  string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * Set firstname
     *
     * @param  string $firstname
     * @return void
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Set lastname
     *
     * @param  string $lastname
     * @return void
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Set plainPassword
     *
     * @param  string $plainPassword
     * @return void
     */
    public function setPlainPassword($plainPassword)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * Set organisation
     *
     * @param  int $organisation
     * @return void
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    }

    /**
     * Set roles
     *
     * @param array<string> $roles
     */
    public function setRoles(array $roles)
    {
        $this->roles = $roles;
    }

    /**
     * Set enabled
     *
     * @param  bool $enabled
     * @return void
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Set root
     *
     * @param  bool $root
     * @return void
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }

    /**
     * @param array $callbacks
     */
    public function setCallbacks(array $callbacks)
    {
        $this->callbacks = $callbacks;
    }
}
