<?php

namespace RIPS\ConnectorBundle\InputBuilders\System;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class LdapBuilder extends BaseBuilder
{
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
     * @var string
     */
    protected $caCertificate;

    /**
     * Set enabled
     *
     * @param bool $enabled
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->setFields[] = 'enabled';
        $this->enabled = $enabled;
    
        return $this;
    }

    /**
     * Set searchDn
     *
     * @param string $searchDn
     * @return $this
     */
    public function setSearchDn($searchDn)
    {
        $this->setFields[] = 'searchDn';
        $this->searchDn = $searchDn;

        return $this;
    }

    /**
     * Set searchPassword
     *
     * @param string $searchPassword
     * @return $this
     */
    public function setSearchPassword($searchPassword)
    {
        $this->setFields[] = 'searchPassword';
        $this->searchPassword = $searchPassword;

        return $this;
    }

    /**
     * Set searchQuery
     *
     * @param string $searchQuery
     * @return $this
     */
    public function setSearchQuery($searchQuery)
    {
        $this->setFields[] = 'searchQuery';
        $this->searchQuery = $searchQuery;

        return $this;
    }

    /**
     * Set baseDn
     *
     * @param string $baseDn
     * @return $this
     */
    public function setBaseDn($baseDn)
    {
        $this->setFields[] = 'baseDn';
        $this->baseDn = $baseDn;

        return $this;
    }

    /**
     * Set emailKey
     *
     * @param string $emailKey
     * @return $this
     */
    public function setEmailKey($emailKey)
    {
        $this->setFields[] = 'emailKey';
        $this->emailKey = $emailKey;

        return $this;
    }

    /**
     * Set identifierKey
     *
     * @param string $identifierKey
     * @return $this
     */
    public function setIdentifierKey($identifierKey)
    {
        $this->setFields[] = 'identifierKey';
        $this->identifierKey = $identifierKey;

        return $this;
    }

    /**
     * Set userDn
     *
     * @param string $userDn
     * @return $this
     */
    public function setUserDn($userDn)
    {
        $this->setFields[] = 'userDn';
        $this->userDn = $userDn;

        return $this;
    }

    /**
     * Set host
     *
     * @param string $host
     * @return $this
     */
    public function setHost($host)
    {
        $this->setFields[] = 'host';
        $this->host = $host;

        return $this;
    }

    /**
     * Set port
     *
     * @param int $port
     * @return $this
     */
    public function setPort($port)
    {
        $this->setFields[] = 'port';
        $this->port = $port;

        return $this;
    }

    /**
     * Set encryption
     *
     * @param string $encryption
     * @return $this
     */
    public function setEncryption($encryption)
    {
        $this->setFields[] = 'encryption';
        $this->encryption = $encryption;

        return $this;
    }

    /**
     * Set protocolVersion
     *
     * @param int $protocolVersion
     * @return $this
     */
    public function setProtocolVersion($protocolVersion)
    {
        $this->setFields[] = 'protocolVersion';
        $this->protocolVersion = $protocolVersion;

        return $this;
    }

    /**
     * Set expiredAccounts
     *
     * @param string $expiredAccounts
     * @return $this
     */
    public function setExpiredAccounts($expiredAccounts)
    {
        $this->setFields[] = 'expiredAccounts';
        $this->expiredAccounts = $expiredAccounts;

        return $this;
    }

    /**
     * Set caCertificate
     *
     * @param string $caCertificate
     * @return $this
     */
    public function setCaCertificate($caCertificate)
    {
        $this->setFields[] = 'caCertificate';
        $this->caCertificate = $caCertificate;

        return $this;
    }
}
