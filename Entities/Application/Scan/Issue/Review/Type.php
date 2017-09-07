<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue\Review;

class TypeEntity
{
    /**
     * @var integer
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
     * @var bool
     */
    protected $negative;

    /**
     * Set id
     *
     * @param integer $id
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
     * Set tag
     *
     * @param string $tag
     * @return void
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
    }

    /**
     * Get tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
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
     * Set negative
     *
     * @param bool $negative
     * @return void
     */
    public function setNegative($negative)
    {
        $this->negative = $negative;
    }

    /**
     * Get negative
     *
     * @return bool
     */
    public function getNegative()
    {
        return $this->negative;
    }
}
