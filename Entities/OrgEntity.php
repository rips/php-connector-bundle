<?php

namespace RIPS\ConnectorBundle\Entities;

use \DateTime;

class OrgEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var DateTime
     */
    protected $validUntil;

    /**
     * @var QuotaEntity[]
     */
    protected $quotas;


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
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

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
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set validUntil
     *
     * @param DateTime $validUntil
     * @return $this
     */
    public function setValidUntil(DateTime $validUntil)
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
        return $this->validUntil;
    }

    /**
     * Set users
     *
     * @param UserEntity[] $user
     * @return $this
     */
    public function setUsers(array $users)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return UserEntity[]
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set teams
     *
     * @param TeamEntity[]
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
     * Set applications
     *
     * @param ApplicationEntity[]
     * @return $this
     */
    public function setApplications(array $applications)
    {
        $this->applications = $applications;

        return $this;
    }

    /**
     * Get applications
     *
     * @return ApplicationEntity[]
     */
    public function getApplications()
    {
        return $this->applications;
    }

    /**
     * Set quotas
     *
     * @param QuotaEntity[] $quotas
     * @return void
     */
    public function setQuotas(array $quotas = [])
    {
        $this->quotas = $quotas;
    }

    /**
     * Get quotas
     *
     * @return QuotaEntity[]
     */
    public function getQuotas()
    {
        return $this->quotas;
    }

    /**
     * Set logs
     *
     * @param LogEntity[] $logs
     * @return $this
     */
    public function setLogs(array $logs)
    {
        $this->logs = $logs;

        return $this;
    }

    /**
     * Get logs
     *
     * @return LogEntity[]
     */
    public function getLogs()
    {
        return $this->logs;
    }
}
