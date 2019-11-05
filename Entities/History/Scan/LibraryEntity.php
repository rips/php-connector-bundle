<?php

namespace RIPS\ConnectorBundle\Entities\History\Scan;

class LibraryEntity
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var string|null
     */
    protected $version;

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string|null
     */
    protected $implementation;

    /**
     * @var string|null
     */
    protected $group;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return LibraryEntity
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string|null $version
     * @return LibraryEntity
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string|null $type
     * @return LibraryEntity
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * @param string|null $implementation
     * @return LibraryEntity
     */
    public function setImplementation($implementation)
    {
        $this->implementation = $implementation;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param string|null $group
     * @return LibraryEntity
     */
    public function setGroup($group)
    {
        $this->group = $group;

        return $this;
    }
}
