<?php

namespace RIPS\ConnectorBundle\Entities\Notification;

class TypeEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $description;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TypeEntity
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return TypeEntity
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }
}
