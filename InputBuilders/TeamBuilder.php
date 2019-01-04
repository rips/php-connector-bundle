<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class TeamBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array - list of user ids
     */
    protected $users;

    /**
     * @var integer - organization id
     */
    protected $organization;

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setFields[] = 'name';
        $this->name = $name;
    
        return $this;
    }

    /**
     * Set users
     *
     * @param array $users
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->setFields[] = 'users';
        $this->users = $users;

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
}
