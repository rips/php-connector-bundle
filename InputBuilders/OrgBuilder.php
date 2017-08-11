<?php

namespace RIPS\ConnectorBundle\InputBuilders;

use RIPS\ConnectorBundle\InputBuilders\BaseBuilder;

class OrgBuilder extends BaseBuilder
{
    protected $validUntil;
    protected $name;

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setValidUntil(string $validUntil)
    {
        $this->validUntil = $validUntil;
    }
}
