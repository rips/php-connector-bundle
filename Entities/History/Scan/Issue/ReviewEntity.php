<?php

namespace RIPS\ConnectorBundle\Entities\History\Scan\Issue;

class ReviewEntity
{
    /**
     * @var int
     */
    protected $quantity;

    /**
     * @var string
     */
    protected $tag;

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     * @return ReviewEntity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * @param string $tag
     * @return ReviewEntity
     */
    public function setTag($tag)
    {
        $this->tag = $tag;

        return $this;
    }
}
