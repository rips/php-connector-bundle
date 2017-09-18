<?php

namespace RIPS\ConnectorBundle\InputBuilders\User;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class InviteBuilder extends BaseBuilder
{
    // @var string
    protected $email;

    // @var string
    protected $username;

    // @var string
    protected $firstname;

    // @var string
    protected $lastname;

    // @var int
    protected $organisation;

    // @var array
    protected $roles;

    // @var bool
    protected $root;

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
     * Set root
     *
     * @param  bool $root
     * @return void
     */
    public function setRoot($root)
    {
        $this->root = $root;
    }
}
