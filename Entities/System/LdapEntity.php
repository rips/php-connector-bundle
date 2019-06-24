<?php

namespace RIPS\ConnectorBundle\Entities\System;

use DateTime;

class LdapEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var bool
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $searchDn;

    /**
     * @var string
     */
    protected $searchPassword;

    /**
     * @var string
     */
    protected $searchQuery;

    /**
     * @var string
     */
    protected $baseDn;

    /**
     * @var string
     */
    protected $emailKey;

    /**
     * @var string
     */
    protected $identifierKey;

    /**
     * @var string
     */
    protected $userDn;

    /**
     * @var string
     */
    protected $host;

    /**
     * @var int
     */
    protected $port;

    /**
     * @var string
     */
    protected $encryption;

    /**
     * @var int
     */
    protected $protocolVersion;

    /**
     * @var string
     */
    protected $expiredAccounts;

    /**
     * @var DateTime
     */
    protected $lastSyncAt;

    /**
     * @var string
     */
    protected $caCertificate;


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
     * @return bool
     */
    public function isEnabled()
    {
        return $this->enabled;
    }

    /**
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchDn()
    {
        return $this->searchDn;
    }

    /**
     * @param string $searchDn
     * @return $this
     */
    public function setSearchDn($searchDn)
    {
        $this->searchDn = $searchDn;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchPassword()
    {
        return $this->searchPassword;
    }

    /**
     * @param string $searchPassword
     * @return $this
     */
    public function setSearchPassword($searchPassword)
    {
        $this->searchPassword = $searchPassword;

        return $this;
    }

    /**
     * @return string
     */
    public function getSearchQuery()
    {
        return $this->searchQuery;
    }

    /**
     * @param string $searchQuery
     * @return $this
     */
    public function setSearchQuery($searchQuery)
    {
        $this->searchQuery = $searchQuery;

        return $this;
    }

    /**
     * @return string
     */
    public function getBaseDn()
    {
        return $this->baseDn;
    }

    /**
     * @param string $baseDn
     * @return $this
     */
    public function setBaseDn($baseDn)
    {
        $this->baseDn = $baseDn;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmailKey()
    {
        return $this->emailKey;
    }

    /**
     * @param string $emailKey
     * @return $this
     */
    public function setEmailKey($emailKey)
    {
        $this->emailKey = $emailKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getIdentifierKey()
    {
        return $this->identifierKey;
    }

    /**
     * @param string $identifierKey
     * @return $this
     */
    public function setIdentifierKey($identifierKey)
    {
        $this->identifierKey = $identifierKey;

        return $this;
    }

    /**
     * @return string
     */
    public function getUserDn()
    {
        return $this->userDn;
    }

    /**
     * @param string $userDn
     * @return $this
     */
    public function setUserDn($userDn)
    {
        $this->userDn = $userDn;

        return $this;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->host = $host;

        return $this;
    }

    /**
     * @return int
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * @return string
     */
    public function getEncryption()
    {
        return $this->encryption;
    }

    /**
     * @param string $encryption
     * @return $this
     */
    public function setEncryption($encryption)
    {
        $this->encryption = $encryption;

        return $this;
    }

    /**
     * @return int
     */
    public function getProtocolVersion()
    {
        return $this->protocolVersion;
    }

    /**
     * @param int $protocolVersion
     * @return $this
     */
    public function setProtocolVersion($protocolVersion)
    {
        $this->protocolVersion = $protocolVersion;

        return $this;
    }

    /**
     * @return string
     */
    public function getExpiredAccounts()
    {
        return $this->expiredAccounts;
    }

    /**
     * @param  string $expiredAccounts
     * @return $this
     */
    public function setExpiredAccounts($expiredAccounts)
    {
        $this->expiredAccounts = $expiredAccounts;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastSyncAt()
    {
        return $this->lastSyncAt;
    }

    /**
     * @param DateTime $lastSyncAt
     * @return $this
     */
    public function setLastSyncAt($lastSyncAt)
    {
        $this->lastSyncAt = $lastSyncAt;

        return $this;
    }

    /**
     * @param string $caCertificate
     * @return $this
     */
    public function setCaCertificate($caCertificate)
    {
        $this->caCertificate = $caCertificate;

        return $this;
    }

    /**
     * @return string
     */
    public function getCaCertificate()
    {
        return $this->caCertificate;
    }
}
