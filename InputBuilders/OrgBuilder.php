<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class OrgBuilder extends BaseBuilder
{
    // @var string
    protected $validUntil;

    // @var string
    protected $name;

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
}
