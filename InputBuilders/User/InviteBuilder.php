<?php

namespace RIPS\ConnectorBundle\InputBuilders\User;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class InviteBuilder extends BaseBuilder
{
    /**
     * @var array
     */
    protected $roles;

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
     * @var integer
     */
    protected $organisation;

    /**
     * @var boolean
     */
    protected $root;

    /**
     * @var array
     */
    protected $callbacks;

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
     * Set organisation
     *
     * @param integer $organisation
     * @return $this
     */
    public function setOrganisation($organisation)
    {
        $this->setFields[] = 'organisation';
        $this->organisation = $organisation;

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
     * Set callbacks
     *
     * @param array $callbacks
     * @return $this
     */
    public function setCallbacks(array $callbacks)
    {
        $this->setFields[] = 'callbacks';
        $this->callbacks = $callbacks;

        return $this;
    }
}
