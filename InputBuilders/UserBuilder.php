<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class UserBuilder extends BaseBuilder
{
    // @var string
    protected $email;

    // @var string
    protected $username;

    // @var string
    protected $firstname;

    // @var string
    protected $lastname;

    // @var string
    protected $plainPassword;

    // @var int
    protected $organisation;

    // @var array
    protected $roles;

    // @var bool
    protected $root;

    // @var bool
    protected $enabled;

    /**
     * Set email
     *
     * @param  string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * Set username
     *
     * @param  string $username
     * @return void
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * Set firstname
     *
     * @param  string $firstname
     * @return void
     */
    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * Set lastname
     *
     * @param  string $lastname
     * @return void
     */
    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * Set plainPassword
     *
     * @param  sting $plainPassword
     * @return void
     */
    public function setPlainPassword(string $password)
    {
        $this->plainPassword = $plainPassword;
    }

    /**
     * Set organisation
     *
     * @param  int $organisation
     * @return void
     */
    public function setOrganisation(int $organisation)
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
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Set root
     *
     * @param  bool $root
     * @return void
     */
    public function setRoot(bool $root)
    {
        $this->root = $root;
    }
}
