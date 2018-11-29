<?php

namespace RIPS\ConnectorBundle\InputBuilders\Application\Scan;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class LibraryBuilder extends BaseBuilder
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $type;

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
     * Set version
     *
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->setFields[] = 'version';
        $this->version = $version;

        return $this;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->setFields[] = 'type';
        $this->type = $type;

        return $this;
    }
}
