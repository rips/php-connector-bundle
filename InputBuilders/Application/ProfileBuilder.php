<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class ProfileBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var boolean
     */
    protected $default;

    /**
     * @var int
     */
    protected $language;
    
    /**
     * Set name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->setFields[] = 'name';
        $this->name = $name;
    
        return $this;
    }

    /**
     * Set default
     *
     * @param boolean $default
     * @return $this
     */
    public function setDefault($default)
    {
        $this->setFields[] = 'default';
        $this->default = $default;

        return $this;
    }


    /**
     * Set language
     *
     * @param int $language
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->setFields[] = 'language';
        $this->language = $language;

        return $this;
    }
}
