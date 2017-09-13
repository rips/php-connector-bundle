<?php

namespace RIPS\ConnectorBundle\InputBuilders;

class OrgBuilder extends BaseBuilder
{
    /** @var string */
    protected $validUntil;

    /** @var string */
    protected $name;

    /** @var array */
    protected $callbacks;

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
     * Set validUntil
     *
     * @param  string $validUntil
     * @return void
     */
    public function setValidUntil(string $validUntil)
    {
        $this->validUntil = $validUntil;
    }

    /**
     * @param array $callbacks
     */
    public function setCallbacks(array $callbacks)
    {
        $this->callbacks = $callbacks;
    }
}
