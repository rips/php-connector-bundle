<?php

namespace RIPS\ConnectorBundle\InputBuilders\Org;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class InvitationBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $company;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var int
     */
    protected $applications;

    /**
     * @var int
     */
    protected $scans;

    /**
     * @var int
     */
    protected $loc;

    /**
     * @var int
     */
    protected $users;

    /**
     * @var int
     */
    protected $duration;

    /**
     * @var int[]
     */
    protected $languages;

    /**
     * @param string $company
     * @return InvitationBuilder
     */
    public function setCompany($company)
    {
        $this->setFields[] = 'company';
        $this->company = $company;

        return $this;
    }

    /**
     * @param string $email
     * @return InvitationBuilder
     */
    public function setEmail($email)
    {
        $this->setFields[] = 'email';
        $this->email = $email;

        return $this;
    }

    /**
     * @param string $firstName
     * @return InvitationBuilder
     */
    public function setFirstName($firstName)
    {
        $this->setFields[] = 'firstName';
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @param string $lastName
     * @return InvitationBuilder
     */
    public function setLastName($lastName)
    {
        $this->setFields[] = 'lastName';
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param int $applications
     * @return InvitationBuilder
     */
    public function setApplications($applications)
    {
        $this->setFields[] = 'applications';
        $this->applications = $applications;

        return $this;
    }

    /**
     * @param int $scans
     * @return InvitationBuilder
     */
    public function setScans($scans)
    {
        $this->setFields[] = 'scans';
        $this->scans = $scans;

        return $this;
    }

    /**
     * @param int $loc
     * @return InvitationBuilder
     */
    public function setLoc($loc)
    {
        $this->setFields[] = 'loc';
        $this->loc = $loc;

        return $this;
    }

    /**
     * @param int $users
     * @return InvitationBuilder
     */
    public function setUsers($users)
    {
        $this->setFields[] = 'users';
        $this->users = $users;

        return $this;
    }

    /**
     * @param int $duration
     * @return InvitationBuilder
     */
    public function setDuration($duration)
    {
        $this->setFields[] = 'duration';
        $this->duration = $duration;

        return $this;
    }

    /**
     * @param int[] $languages
     * @return InvitationBuilder
     */
    public function setLanguages($languages)
    {
        $this->setFields[] = 'languages';
        $this->languages = $languages;

        return $this;
    }
}
