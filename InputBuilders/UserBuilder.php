<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use DateTime;

class UserBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $username;

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
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var array
     */
    protected $roles;

    /**
     * @var boolean
     */
    protected $root = false;

    /**
     * @var int
     */
    protected $organisation;
    
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
     * Set validUntil
     *
     * @param string $validUntil
     * @return $this
     */
    public function setValidUntil($validUntil)
    {
        $this->validUntil = $validUntil;
    
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
        $this->roles = $roles;
    
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
        $this->root = $root;
    
        return $this;
    }
    
    /**
     * Set organisation
     *
     * @param int $organisation
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->organisation = $organisation;
    
        return $this;
    }
}
