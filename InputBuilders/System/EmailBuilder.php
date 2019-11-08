<?php

namespace RIPS\ConnectorBundle\InputBuilders\System;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class EmailBuilder extends BaseBuilder
{
    /**
     * @var bool
     */
    protected $enabled;

    /**
     * @var string
     */
    protected $transport;

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
    protected $username;

    /**
     * @var string
     */
    protected $encryption;

    /**
     * @var string
     */
    protected $auth;

    /**
     * @var string
     */
    protected $sender;

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
     * Set transport
     *
     * @param string $transport
     * @return $this
     */
    public function setTransport($transport)
    {
        $this->setFields[] = 'transport';
        $this->transport = $transport;

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
     * Set username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->setFields[] = 'username';
        $this->username = $username;

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
     * Set auth
     *
     * @param string $auth
     * @return $this
     */
    public function setAuth($auth)
    {
        $this->setFields[] = 'auth';
        $this->auth = $auth;

        return $this;
    }

    /**
     * Set sender
     *
     * @param string $sender
     * @return $this
     */
    public function setSender($sender)
    {
        $this->setFields[] = 'sender';
        $this->sender = $sender;

        return $this;
    }
}
