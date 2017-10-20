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
     * @var Application\Scan\Issue\CommentEntity[]
     */
    protected $createdComments;

    /**
     * @var Application\Scan\Issue\ReviewEntity[]
     */
    protected $createdReviews;

    /**
     * @var ApplicationEntity[]
     */
    protected $createdApplications;

    /**
     * @var Application\ScanEntity[]
     */
    protected $createdScans;

    /**
     * @var Application\AclEntity[]
     */
    protected $createdApplicationAcls;

    /**
     * @var Quota\AclEntity[]
     */
    protected $createdQuotaAcls;

    /**
     * @var LicenseEntity[]
     */
    protected $createdLicenses;

    /**
     * @var UserEntity[]
     */
    protected $createdUsers;

    /**
     * @var TeamEntity[]
     */
    protected $createdTeams;

    /**
     * @var Application\UploadEntity[]
     */
    protected $createdUploads;

    /**
     * @var Application\AclEntity[]
     */
    protected $applicationAcls;

    /**
     * @var Quota\AclEntity[]
     */
    protected $quotaAcls;

    /**
     * @var LogEntity[]
     */
    protected $logs;

    /**
     * @var UserEntity
     */
    protected $createdBy;

    /**
     * @var DateTime
     */
    protected $lastModification;

    /**
     * @var QuotaEntity
     */
    protected $chargedQuota;

    /**
     * @var OrgEntity
     */
    protected $organisation;

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
        return isset($this->organisation) ? $this->organisation->getValidUntil() : $this->validUntil;
    }

    /**
     * Set createdComments
     *
     * @param Application\Scan\Issue\CommentEntity[] $createdComments
     * @return $this
     */
    public function setCreatedComments(array $createdComments)
    {
        $this->createdComments = $createdComments;

        return $this;
    }

    /**
     * Get createdComments
     *
     * @return Application\Scan\Issue\CommentEntity[]
     */
    public function getCreatedComments()
    {
        return $this->createdComments;
    }

    /**
     * Set createdReviews
     *
     * @param Application\Scan\Issue\ReviewEntity[] $createdReviews
     * @return $this
     */
    public function setCreatedReviews(array $createdReviews)
    {
        $this->createdReviews = $createdReviews;

        return $this;
    }

    /**
     * Get createdReviews
     *
     * @return Application\Scan\Issue\ReviewEntity[]
     */
    public function getCreatedReviews()
    {
        return $this->createdReviews;
    }

    /**
     * Set createdApplications
     *
     * @param ApplicationEntity[] $createdApplications
     * @return $this
     */
    public function setCreatedApplications(array $createdApplications)
    {
        $this->createdApplications = $createdApplications;

        return $this;
    }

    /**
     * Get createdApplications
     *
     * @return ApplicationEntity[]
     */
    public function getCreatedApplications()
    {
        return $this->createdApplications;
    }

    /**
     * Set createdScans
     *
     * @param Application\ScanEntity[] $createdScans
     * @return $this
     */
    public function setCreatedScans(array $createdScans)
    {
        $this->createdScans = $createdScans;

        return $this;
    }

    /**
     * Get createdScans
     *
     * @return Application\ScanEntity[]
     */
    public function getCreatedScans()
    {
        return $this->createdScans;
    }

    /**
     * Set createdApplicationAcls
     *
     * @param Application\AclEntity[] $createdApplicationAcls
     * @return $this
     */
    public function setCreatedApplicationAcls(array $createdApplicationAcls)
    {
        $this->createdApplicationAcls = $createdApplicationAcls;

        return $this;
    }

    /**
     * Get createdApplicationAcls
     *
     * @return Application\AclEntity[]
     */
    public function getCreatedApplicationAcls()
    {
        return $this->createdApplicationAcls;
    }

    /**
     * Set createdQuotaAcls
     *
     * @param Quota\AclEntity[] $createdQuotaAcls
     * @return $this
     */
    public function setCreatedQuotaAcls(array $createdQuotaAcls)
    {
        $this->createdQuotaAcls = $createdQuotaAcls;

        return $this;
    }

    /**
     * Get createdQuotaAcls
     *
     * @return Quota\AclEntity[]
     */
    public function getCreatedQuotaAcls()
    {
        return $this->createdQuotaAcls;
    }

    /**
     * Set createdLicenses
     *
     * @param LicenseEntity[] $createdLicenses
     * @return $this
     */
    public function setCreatedLicenses(array $createdLicenses)
    {
        $this->createdLicenses = $createdLicenses;

        return $this;
    }

    /**
     * Get createdLicenses
     *
     * @return LicenseEntity[]
     */
    public function getCreatedLicenses()
    {
        return $this->createdLicenses;
    }

    /**
     * Set createdUsers
     *
     * @param UserEntity[] $createdUsers
     * @return $this
     */
    public function setCreatedUsers(array $createdUsers)
    {
        $this->createdUsers = $createdUsers;

        return $this;
    }

    /**
     * Get createdUsers
     *
     * @return UserEntity[]
     */
    public function getCreatedUsers()
    {
        return $this->createdUsers;
    }

    /**
     * Set createdTeams
     *
     * @param TeamEntity[] $createdTeams
     * @return $this
     */
    public function setCreatedTeams(array $createdTeams)
    {
        $this->createdTeams = $createdTeams;

        return $this;
    }

    /**
     * Get createdTeams
     *
     * @return TeamEntity[]
     */
    public function getCreatedTeams()
    {
        return $this->createdTeams;
    }

    /**
     * Set createdUploads
     *
     * @param Application\UploadEntity[] $createdUploads
     * @return $this
     */
    public function setCreatedUploads(array $createdUploads)
    {
        $this->createdUploads = $createdUploads;

        return $this;
    }

    /**
     * Get createdUploads
     *
     * @return Application\UploadEntity[]
     */
    public function getCreatedUploads()
    {
        return $this->createdUploads;
    }

    /**
     * Set applicationAcls
     *
     * @param Application\AclEntity[] $applicationAcls
     * @return $this
     */
    public function setApplicationAcls(array $applicationAcls)
    {
        $this->applicationAcls = $applicationAcls;

        return $this;
    }

    /**
     * Get applicationAcls
     *
     * @return Application\AclEntity[]
     */
    public function getApplicationAcls()
    {
        return $this->applicationAcls;
    }

    /**
     * Set applicationAcls
     *
     * @param Quota\AclEntity[] $applicationAcls
     * @return $this
     */
    public function setQuotaAcls(array $applicationAcls)
    {
        $this->applicationAcls = $applicationAcls;

        return $this;
    }

    /**
     * Get applicationAcls
     *
     * @return Quota\AclEntity[]
     */
    public function getQuotaAcls()
    {
        return $this->quotaAcls;
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

    /**
     * Set createdBy
     *
     * @param UserEntity $createdBy
     * @return $this
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return UserEntity
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set lastModification
     *
     * @param DateTime $lastModification
     * @return $this
     */
    public function setLastModification($lastModification)
    {
        $this->lastModification = $lastModification;

        return $this;
    }

    /**
     * Get lastModification
     *
     * @return DateTime
     */
    public function getLastModification()
    {
        return $this->lastModification;
    }

    /**
     * Set chargedQuota
     *
     * @param QuotaEntity $chargedQuota
     * @return $this
     */
    public function setChargedQuota($chargedQuota)
    {
        $this->chargedQuota = $chargedQuota;

        return $this;
    }

    /**
     * Get chargedQuota
     *
     * @return QuotaEntity
     */
    public function getChargedQuota()
    {
        return $this->chargedQuota;
    }

    /**
     *  Set organisation
     *
     * @param OrgEntity $org
     * @return $this
     */
    public function setOrganisation($org)
    {
        $this->organisation = $org;

        return $this;
    }

    /**
     * Get organisation
     *
     * @return OrgEntity
     */
    public function getOrganisation()
    {
        return $this->organisation;
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
}
