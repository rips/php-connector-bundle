<?php

namespace RIPS\ConnectorBundle\Entities\OAuth2;

class ClientEntity
{
    /**
     * @var array
     */
    private $availableGrantTypes = [
        'refresh_token',
        'authorization_code',
        'client_credentials',
        'password',
        'implicit'
    ];

    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $randomId;

    /**
     * @var string
     */
    protected $secret;

    /**
     * @var string[]
     */
    protected $redirectUris = [];

    /**
     * @var string[]
     */
    protected $allowedGrantTypes = [];

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
     * Set id
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get random id
     *
     * @return string
     */
    public function getRandomId()
    {
        return $this->randomId;
    }

    /**
     * Set random id
     *
     * @param string $randomId
     */
    public function setRandomId($randomId)
    {
        $this->randomId = $randomId;
    }

    /**
     * Get secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->secret;
    }

    /**
     * Set secret
     *
     * @param string $secret
     */
    public function setSecret($secret)
    {
        $this->secret = $secret;
    }

    /**
     * Get redirect uris
     *
     * @return string[]
     */
    public function getRedirectUris()
    {
        return $this->redirectUris;
    }

    /**
     * Set redirect uris
     *
     * @param string[] $redirectUris
     */
    public function setRedirectUris($redirectUris)
    {
        $this->redirectUris = $redirectUris;
    }

    /**
     * Get allowed grant types
     *
     * @return string[]
     */
    public function getAllowedGrantTypes()
    {
        return $this->allowedGrantTypes;
    }

    /**
     * Set allowed grant types
     *
     * @param string[] $allowedGrantTypes
     * @throws \Exception
     */
    public function setAllowedGrantTypes($allowedGrantTypes)
    {
        foreach ($allowedGrantTypes as $allowedGrantType) {
            if (!in_array($allowedGrantType, $this->availableGrantTypes)) {
                throw new \Exception('Unknown grant type ' . $allowedGrantType);
            }
        }
        $this->allowedGrantTypes = $allowedGrantTypes;
    }
}
