<?php

namespace RIPS\ConnectorBundle\Entities;

class UserEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $username;

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
    protected $email;

    /**
     * @var boolean
     */
    protected $emptyUsername = false;

    /**
     * @var array
     */
    protected $roles;

    /**
     * @var boolean
     */
    protected $root;

    /**
     * @var boolean
     */
    protected $enabled;

    /**
     * @var OrgEntity
     */
    protected $organisation;

    /**
     * @var string
     */
    protected $validUntil;


    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
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
     * Get username
     *
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
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
     * Get firstname
     *
     * @return string
     */
    public function getFirstname(): string
    {
        return $this->firstname;
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
     * Get lastname
     *
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * Set email
     *
     * @param  string $email
     * @return void
     */
    public function setEmail(string $email)
    {
        return $this->email = $email;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set emptyUsername
     *
     * @param  boolean $emptyUsername
     * @return void
     */
    public function setEmptyUsername(bool $emptyUsername)
    {
        $this->emptyUsername = $emptyUsername;
    }

    /**
     * Get empty_username
     *
     * @return boolean
     */
    public function getEmptyUsername(): bool
    {
        return $this->emptyUsername;
    }

    /**
     * Set roles
     *
     * @param  array $roles
     * @return void
     */
    public function setRoles(array $roles = [])
    {
        $this->roles = $roles;
    }

    /**
     * Get roles
     *
     * @return array
     */
    public function getRoles(): array
    {
        return $this->roles;
    }

    /**
     * Set root
     *
     * @param  boolean $root
     * @return void
     */
    public function setRoot(bool $root)
    {
        $this->root = $root;
    }

    /**
     * Get root
     *
     * @return boolean
     */
    public function getRoot(): bool
    {
        return $this->root;
    }

    /**
     * Set enabled
     *
     * @param  boolean $enabled
     * @return void
     */
    public function setEnabled(bool $enabled)
    {
        $this->enabled = $enabled;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled(): bool
    {
        return $this->enabled;
    }

    /**
     *  Set organisation
     *
     * @param  OrgEntity $org
     * @return void
     */
    public function setOrganisation(OrgEntity $org)
    {
        $this->organisation = $org;
    }

    /**
     * Get organisation
     *
     * @return OrgEntity
     */
    public function getOrganisation(): OrgEntity
    {
        return $this->organisation;
    }

    /**
     * Set validUntil
     *
     * @param string $validUntil
     * @return void
     */
    public function setValidUntil(string $validUntil)
    {
        $this->validUntil = $validUntil;
    }

    /**
     * Get validUntil
     *
     * @return string
     */
    public function getValidUntil(): string
    {
        return isset($this->organisation) ? $this->organisation->getValidUntil() : $this->validUntil;
    }
}
