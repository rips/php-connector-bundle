<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

use RIPS\ConnectorBundle\Entities\Application\Scan\IssueEntity;

class MarkupEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var Markup\PartEntity[]
     */
    protected $parts;

    /**
     * Set id
     *
     * @param  int $id
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
     * Set parts
     *
     * @param Markup\PartEntity[] $parts
     * @return $this
     */
    public function setParts(array $parts)
    {
        $this->parts = $parts;

        return $this;
    }

    /**
     * Get parts
     *
     * @return Markup\PartEntity[]
     */
    public function getParts()
    {
        return $this->parts;
    }
}
