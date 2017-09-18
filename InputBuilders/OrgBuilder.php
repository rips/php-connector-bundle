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
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Set validUntil
     *
     * @param  string $validUntil
     * @return void
     */
    public function setValidUntil($validUntil)
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
