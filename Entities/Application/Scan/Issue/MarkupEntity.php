<?php

namespace RIPS\ConnectorBundle\Entities\Application\Scan\Issue;

class MarkupEntity
{
    /**
     * @var int
     */
    protected $id;

    /**
     * @var string
     */
    protected $markup;

    /**
     * Set id
     *
     * @param  integer $id
     * @return void
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set markup
     *
     * @param string $markup
     * @return void
     */
    public function setMarkup(string $markup)
    {
        $this->markup = $markup;
    }

    /**
     * Get markup
     *
     * @return string
     */
    public function getMarkup(): string
    {
        return $this->markup;
    }
}
