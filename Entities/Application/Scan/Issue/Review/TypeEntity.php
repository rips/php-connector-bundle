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
     * @var int
     */
    protected $order;

    /**
     * Set id
     *
     * @param integer $id
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
     * @return $this
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
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
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
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
     * @return $this
     */
    public function setNegative($negative)
    {
        $this->negative = $negative;

        return $this;
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

    /**
     * Get order
     *
     * @return int
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * Set order
     *
     * @param int $order
     * @return $this
     */
    public function setOrder($order)
    {
        $this->order = $order;

        return $this;
    }
}
