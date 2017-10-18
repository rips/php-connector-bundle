<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class TeamBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array - formatted as [userId => boolean]
     */
    protected $users;

    /**
     * @var integer - organisation id
     */
    protected $organisation;

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
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
        $this->users = $users;

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
        $this->organisation =$organisation;

        return $this;
    }
}
