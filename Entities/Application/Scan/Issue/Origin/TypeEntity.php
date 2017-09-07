<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Origin;

class TypeEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @var string
     */
    protected $name;

    /**
     * Set id
     *
     * @param  int $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set tag
     *
     * @param  string $tag
     * @return void
     */
    public function setTag(string $tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

    /**
     * Set name
     *
     * @param  string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName(): string
    {
        return $this->name;
    }
}
