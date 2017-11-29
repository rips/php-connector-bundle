<?php

namespace RIPS\ConnectorBundle\InputBuilders\OAuth2;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ClientBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string[]
     */
    protected $redirectUris;

    /**
     * @var string[]
     */
    protected $allowedGrantTypes;

    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setFields[] = "name";
        $this->name = $name;

        return $this;
    }

    /**
     * Set redirect uris
     *
     * @param string[] $redirectUris
     * @return $this
     */
    public function setRedirectUris(array $redirectUris)
    {
        $this->setFields[] = "redirectUris";
        $this->redirectUris = $redirectUris;

        return $this;
    }

    /**
     * Set allowed grant types
     *
     * @param string[] $allowedGrantTypes
     * @return $this
     */
    public function setAllowedGrantTypes(array $allowedGrantTypes)
    {
        $this->setFields[] = 'allowedGrantTypes';
        $this->allowedGrantTypes = $allowedGrantTypes;

        return $this;
    }
}
