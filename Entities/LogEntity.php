<?php

namespace RIPS\ConnectorBundle\Entities;

class LogEntity
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var string
     */
    protected $text;

    /**
     * @var int
     */
    protected $level;

    /**
     * @var string
     */
    protected $channel;

    /**
     * @var string
     */
    protected $requestUri;

    /**
     * @var string
     */
    protected $requestMethod;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var UserEntity
     */
    protected $user;

    /**
     * @var string
     */
    protected $username;

    /**
     * @var OrgEntity
     */
    protected $org;

    /**
     * @var string
     */
    protected $orgName;

    /**
     * @var string
     */
    protected $context;

    /**
     * @var string
     */
    protected $created;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set text
     *
     * @param  string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set level
     *
     * @param  int $level
     * @return void
     */
    public function setLevel($level)
    {
        $this->level = $level;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set channel
     *
     * @param  string $channel
     * @return void
     */
    public function setChannel($channel)
    {
        $this->channel = $channel;
    }

    /**
     * Get channel
     *
     * @return string
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * Set request URI
     *
     * @param  string $requestUri
     * @return void
     */
    public function setRequestUri($requestUri)
    {
        $this->requestUri = $requestUri;
    }

    /**
     * Get request URI
     *
     * @return string
     */
    public function getRequestUri()
    {
        return $this->requestUri;
    }

    /**
     * Set request method
     *
     * @param  string $requestMethod
     * @return void
     */
    public function setRequestMethod($requestMethod)
    {
        $this->requestMethod = $requestMethod;
    }

    /**
     * Get request method
     *
     * @return string
     */
    public function getRequestMethod()
    {
        return $this->requestMethod;
    }

    /**
     * Set ip
     *
     * @param  string $ip
     * @return void
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set user
     *
     * @param  UserEntity $user
     * @return void
     */
    public function setUser(UserEntity $user)
    {
        $this->user = $user;
    }

    /**
     * Get user
     *
     * @return UserEntity
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set username
     *
     * @param  string $username
     * @return void
     */
    public function setUsername($username)
    {
        $this->username = $username;
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
     * Set org
     *
     * @param  OrgEntity $org
     * @return void
     */
    public function setOrg(OrgEntity $org)
    {
        $this->org = $org;
    }

    /**
     * Get org
     *
     * @return OrgEntity
     */
    public function getOrg(): OrgEntity
    {
        return $this->org;
    }

    /**
     * Set org name
     *
     * @param  string $orgName
     * @return void
     */
    public function setOrgName($orgName)
    {
        $this->orgName = $orgName;
    }

    /**
     * Get org name
     *
     * @return string
     */
    public function getOrgName()
    {
        return $this->orgName;
    }

    /**
     * Set context
     *
     * @param  string $context
     * @return void
     */
    public function setContext($context)
    {
        $this->context = $context;
    }

    /**
     * Get context
     *
     * @return string
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Set created
     *
     * @param  string $created
     * @return void
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * Get created
     *
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }
}
