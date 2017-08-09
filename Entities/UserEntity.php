<?php

namespace RIPS\ConnectorBundle\Entities;

class UserEntity
{
    // @var integer
    protected $id;

    // @var string
    protected $username;

    // @var string
    protected $firstname = '';

    // @var string
    protected $lastname = '';

    // @var string
    protected $email;

    // @var string
    protected $emptyUsername = false;

    // @var array
    protected $roles;

    // @var boolean
    protected $root;

    // @var boolean
    protected $enabled;

    // @var OrgEntity
    protected $organisation;

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setFirstname(string $firstname)
    {
        $this->firstname = $firstname;
    }

    public function getFirstname()
    {
        return $this->firstname;
    }

    public function setLastname(string $lastname)
    {
        $this->lastname = $lastname;
    }

    public function getLastname()
    {
        return $this->lastname;
    }

    public function setEmail(string $email)
    {
        return $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmptyUsername(bool $emptyUsername)
    {
        $this->emptyUsername = $emptyUsername;
    }

    public function getEmptyUsername()
    {
        return $this->emptyUsername;
    }

    public function setRoles(array $roles = [])
    {
        $this->roles = $roles;
    }

    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoot(bool $root)
    {
        $this->root = $root;
    }

    public function getRoot()
    {
        return $this->root;
    }

    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    public function getEnabled()
    {
        return $this->enabled;
    }

    public function setOrganisation(OrgEntity $org)
    {
        $this->organisation = $org;
    }

    public function getOrganisation()
    {
        return $this->organisation;
    }
}
