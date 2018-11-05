<?php

namespace RIPS\ConnectorBundle\Entities;

use DateTime;

class UserEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var boolean
     */
    protected $emptyUsername = false;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $firstname = '';

    /**
     * @var string
     */
    protected $lastname = '';

    /**
     * @var string
     */
    protected $plainPassword;

    /**
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var OrgEntity
     */
    protected $organization;

    /**
     * @var TeamEntity[]
     */
    protected $teams;

    /**
     * @var array
     */
    protected $roles;

    /**
     * @var boolean
     */
    protected $root = false;

    /**
     * @var array
     */
    protected $whitelistedIps;

    /**
     * @var array
     */
    protected $callbacks;

    /**
     * Set id
     *
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
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

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set emptyUsername
     *
     * @param boolean $emptyUsername
     * @return $this
     */
    public function setEmptyUsername($emptyUsername)
    {
        $this->emptyUsername = $emptyUsername;

        return $this;
    }

    /**
     * Get emptyUsername
     *
     * @return boolean
     */
    public function getEmptyUsername()
    {
        return $this->emptyUsername;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return $this
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     * @return $this
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

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
     * Get plainPassword
     *
     * @return string
     */
    public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    /**
     * Set validUntil
     *
     * @param DateTime $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;

        return $this;
    }

    /**
     * Get validUntil
     *
     * @return DateTime
     */
    public function getValidUntil()
    {
        return isset($this->organization) ? $this->organization->getValidUntil() : $this->validUntil;
    }

    /**
     *  Set organization
     *
     * @param OrgEntity $org
     * @return $this
     */
    public function setOrganization($org)
    {
        $this->organization = $org;

        return $this;
    }

    /**
     * Get organization
     *
     * @return OrgEntity
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Set teams
     *
     * @param TeamEntity[] $teams
     * @return $this
     */
    public function setTeams(array $teams)
    {
        $this->teams = $teams;

        return $this;
    }

    /**
     * Get teams
     *
     * @return TeamEntity[]
     */
    public function getTeams()
    {
        return $this->teams;
    }

    /**
     * Set roles
     *
     * @param array $roles
     * @return $this
     */
    public function setRoles(array $roles = [])
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles()
    {
        return $this->roles;
    }

    /**
     * Set root
     *
     * @param boolean $root
     * @return $this
     */
    public function setRoot($root)
    {
        $this->root = $root;

        return $this;
    }

    /**
     * Get root
     *
     * @return boolean
     */
    public function getRoot()
    {
        return $this->root;
    }

    /**
     * Set whitelisted ips
     *
     * @param array $whitelistedIps
     * @return $this
     */
    public function setWhitelistedIps(array $whitelistedIps = [])
    {
        $this->whitelistedIps = $whitelistedIps;

        return $this;
    }

    /**
     * Get whitelisted ips
     *
     * @return array
     */
    public function getWhitelistedIps()
    {
        return $this->whitelistedIps;
    }

    /**
     * Set callbacks
     *
     * @param array $callbacks
     * @return $this
     */
    public function setCallbacks(array $callbacks)
    {
        $this->callbacks = $callbacks;

        return $this;
    }

    /**
     * Get callbacks
     *
     * @return array
     */
    public function getCallbacks()
    {
        return $this->callbacks;
    }
}
